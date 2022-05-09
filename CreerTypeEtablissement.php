<?php


class CreerTypeEtablissement extends AtexoPage {

    private $_dataLibelleType = null;
    private $_dataLibelleEtab = null;
    public $isActiveModuleTypeEtab = 0;

	public function onInit()
	{
		$this->Master->setCalledFrom("admin");
		Atexo_Utils_Languages::setLanguageCatalogue($this->Master->getCalledFrom());
	}

	public function onLoad()
	{
        try {
            $this->isActiveModuleTypeEtab = Atexo_Config::getParameter('MODULE_TYPE_ETAB_' . $this->User->getCurrentOrganism());
        } catch (Exception $e) {
            $this->isActiveModuleTypeEtab = 0;
        }

        if(Atexo_User_CurrentUser::hasHabilitation('GestionEtablissement') && $this->isActiveModuleTypeEtab) {
            if(!$this->isPostBack) {
                if(isset($_GET["id"])) {
                    $this->remplirData($_GET["id"]);
                }else{
                    self::getListeLibelleTypeParLangues($this->_dataLibelleType);
                    self::getListeLibelleEtabParLangues($this->_dataLibelleEtab);
                    $this->remplirListeNiveauDecoupage();
                }
            }
        }else{
            $this->response->redirect("?page=administration.AccueilAdministrateurAuthentifie");
        }
	}

    public function remplirListeNiveauDecoupage()
    {
        $dataSource = array(
            '-1' => Prado::localize('SELECTIONNEZ'),
            '0' => Prado::localize('NIVEAU_0'),
            '1' => Prado::localize('NIVEAU_1'),
            '2' => Prado::localize('NIVEAU_2'),
            '3' => Prado::localize('NIVEAU_3')
        );
        $this->listeNiveauDecoupage->dataSource = $dataSource;
        $this->listeNiveauDecoupage->dataBind();
    }

    public function getListeLibelleTypeParLangues($data=null) {
        if(!empty($data)) {
            $this->setListeLibelleTypeParLangues($data);
        } else {
            //recupérer les langues
            $langues= explode(",", Atexo_Config::getParameter("LANGUES_ACTIVES"));

            $data = array();
            $index=0;
            foreach($langues as $lan){
                $data[$index]['LibelleTypeLibelleLang'] = Prado::localize('LIBELLE_TYPE_ETABLISSEMENT');
                $data[$index]['lang'] = '('.Prado::localize('LANG_'.strtoupper($lan)).')';
                $data[$index]['LibelleType'] = '';
                $data[$index]['langLibelleType'] = $lan;
                $index++;
            }
            $this->setListeLibelleTypeParLangues($data);
        }
    }

    public function setListeLibelleTypeParLangues($data) {
        $this->listeLibelleTypeLangues->dataSource = $data;
        $this->listeLibelleTypeLangues->dataBind();
        $index = 0;
        foreach ($this->listeLibelleTypeLangues->getItems() as $item) {
            $item->LibelleTypeLibelleLang->Text = $data[$index]['LibelleTypeLibelleLang'];
            $item->lang->Text = $data[$index]['lang'];
            $item->LibelleType->Text = $data[$index]['LibelleType'];
            $item->langLibelleType->Value = $data[$index]['langLibelleType'];
            $index++;
        }
    }

    public function getListeLibelleEtabParLangues($data=null) {
        if(!empty($data)) {
            $this->setListeLibelleEtabParLangues($data);
        } else {
            //recupérer les langues
            $langues= explode(",", Atexo_Config::getParameter("LANGUES_ACTIVES"));

            $data = array();
            $index=0;
            foreach($langues as $lan){
                $data[$index]['LibelleEtabLibelleLang'] = Prado::localize('LIBELLE_ETABLISSEMENT');
                $data[$index]['lang'] = '('.Prado::localize('LANG_'.strtoupper($lan)).')';
                $data[$index]['LibelleEtab'] = '';
                $data[$index]['langLibelleEtab'] = $lan;
                $index++;
            }
            $this->setListeLibelleEtabParLangues($data);
        }
    }

    public function setListeLibelleEtabParLangues($data) {
        $this->listeLibelleEtabLangues->dataSource = $data;
        $this->listeLibelleEtabLangues->dataBind();
        $index = 0;
        foreach ($this->listeLibelleEtabLangues->getItems() as $item) {
            $item->LibelleEtabLibelleLang->Text = $data[$index]['LibelleEtabLibelleLang'];
            $item->lang->Text = $data[$index]['lang'];
            $item->LibelleEtab->Text = $data[$index]['LibelleEtab'];
            $item->langLibelleEtab->Value = $data[$index]['langLibelleEtab'];
            $index++;
        }
    }

    public function enregistrer() {

        $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationGere ();

        if(isset($_GET["id"])) {
            $tTypeEtab = TTypeEtabQuery::create()->filterByIdTypeEtab($_GET["id"])->filterByIdOrganisation($idOrganisation)->findOne();
            if ($tTypeEtab instanceof TTypeEtab) {
                $tTraductionLibelleType = $tTypeEtab->getTTraductionRelatedByCodeLibelle();
                $tTraductionLibelleEtab = $tTypeEtab->getTTraductionRelatedByCodeLibelleEtab();

                if(!isset($tTraductionLibelleType)) {
                    $tTraductionLibelleType = new TTraduction();
                }
                if(!isset($tTraductionLibelleEtab)) {
                    $tTraductionLibelleEtab = new TTraduction();
                }
            }
        }

        if(!($tTypeEtab instanceof TTypeEtab)) {
            $tTypeEtab = new TTypeEtab();
            $tTraductionLibelleType = new TTraduction();
            $tTraductionLibelleEtab = new TTraduction();
        }

        foreach($this->listeLibelleTypeLangues->getItems() as $item) {
            $tTraductionLibelle = $tTraductionLibelleType->getTTraductionLibelle($item->langLibelleType->Value);
            $tTraductionLibelle->setLang($item->langLibelleType->Value);
            $tTraductionLibelle->setLibelle($item->LibelleType->SafeText);
            $tTraductionLibelleType->addTTraductionLibelle($tTraductionLibelle);
        }

        foreach($this->listeLibelleEtabLangues->getItems() as $item) {
            $tTraductionLibelle = $tTraductionLibelleEtab->getTTraductionLibelle($item->langLibelleEtab->Value);
            $tTraductionLibelle->setLang($item->langLibelleEtab->Value);
            $tTraductionLibelle->setLibelle($item->LibelleEtab->SafeText);
            $tTraductionLibelleEtab->addTTraductionLibelle($tTraductionLibelle);
        }

        $tTypeEtab->setTTraductionRelatedByCodeLibelle($tTraductionLibelleType);
        $tTypeEtab->setTTraductionRelatedByCodeLibelleEtab($tTraductionLibelleEtab);

        $tTypeEtab->setNiveau($this->listeNiveauDecoupage->SelectedValue);
        $tTypeEtab->setIdOrganisation($idOrganisation);
        $tTypeEtab->setDetailPrestation($this->affichageDetailPrestationOui->Checked ? "1":"0");
        $tTypeEtab->save();

        $url = "index.php?page=administration.GestionTypeEtablissement";
        $this->response->redirect($url);
    }

    public function remplirData($idTypeTab) {
        $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationGere ();
        $tTypeEtab = TTypeEtabQuery::create()->filterByIdTypeEtab($_GET["id"])->filterByIdOrganisation($idOrganisation)->findOne();
        if ($tTypeEtab instanceof TTypeEtab){
            //recupérer les langues
            $langues = explode(",", Atexo_Config::getParameter("LANGUES_ACTIVES"));

            $index=0;
            foreach($langues as $lan){
                $data[$index]['LibelleTypeLibelleLang'] = Prado::localize('LIBELLE_TYPE_ETABLISSEMENT');
                $data[$index]['lang'] = '('.Prado::localize('LANG_'.strtoupper($lan)).')';
                $data[$index]['LibelleType'] = $tTypeEtab->getLibelleTypeTraduit($lan);
                $data[$index]['langLibelleType'] = $lan;
                $index++;
            }
            $this->setListeLibelleTypeParLangues($data);
            $index=0;
            foreach($langues as $lan){
                $data[$index]['LibelleEtabLibelleLang'] = Prado::localize('LIBELLE_ETABLISSEMENT');
                $data[$index]['lang'] = '('.Prado::localize('LANG_'.strtoupper($lan)).')';
                $data[$index]['LibelleEtab'] = $tTypeEtab->getLibelleTypeEtabTraduit($lan);
                $data[$index]['langLibelleEtab'] = $lan;
                $index++;
            }
            $this->setListeLibelleEtabParLangues($data);

            $this->remplirListeNiveauDecoupage();
            $this->listeNiveauDecoupage->SelectedValue = $tTypeEtab->getNiveau();
            if($tTypeEtab->getDetailPrestation() == '0'){
                $this->affichageDetailPrestationNon->Checked = true;
            }elseif($tTypeEtab->getDetailPrestation() == '1'){
                $this->affichageDetailPrestationOui->Checked = true;
            }
        }
    }
}