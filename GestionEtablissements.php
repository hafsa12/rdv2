<?php
/**
 * description de la classe
 *
 * @author atexo
 * @copyright Atexo 2013
 * @version 0.0
 * @since Atexo.Rdv
 * @package atexo
 * @subpackage atexo
 */

class GestionEtablissements extends AtexoPage {

	private $_lang;
    /**
     * @var Atexo_Etablissement_CriteriaVo
     */
    protected $_criteriaVo = "";

	public function onInit()
	{
		$this->Master->setCalledFrom("admin");
		Atexo_Utils_Languages::setLanguageCatalogue($this->Master->getCalledFrom());
	}

	public function onLoad()
	{
		if(!Atexo_User_CurrentUser::hasHabilitation('GestionEtablissement')) {
			$this->response->redirect("?page=administration.AccueilAdministrateurAuthentifie");
		}

		$this->_lang = Atexo_User_CurrentUser::readFromSession("lang");
		if(!$this->isPostBack) {
            if(!isset($_GET["search"])) {
                unset($_SESSION["etab"]["criteriaVoSearch"]);
                unset($_SESSION["etab"]["sensTri"]);
                unset($_SESSION["etab"]["sortByElement"]);
            }
            $this->init();
		}else{
            $this->_criteriaVo = $_SESSION["etab"]["criteriaVoSearch"];
        }
	}

    protected function init() {

        $this->_criteriaVo = $_SESSION["etab"]["criteriaVoSearch"];

        $adminOrg = Atexo_User_CurrentUser::isAdminOrg();
        $adminEtab = Atexo_User_CurrentUser::isAdminEtab() || Atexo_User_CurrentUser::isAdminOrgWithEtab();
        $this->loadOrganisation();

        if(!$this->_criteriaVo) {
            $this->loadEntite1();
            $this->loadEntite2();
            $this->loadEntite3();

            $this->_criteriaVo = new Atexo_Etablissement_CriteriaVo();

            if ( $adminOrg ) {
                $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationGere ();
                $this->_criteriaVo->setIdOrganisation ( $idOrganisation );
                $this->listeOrganisation->SelectedValue = $idOrganisation;
                $this->listeOrganisation->Enabled = false;
            }
            if ( $adminEtab ) {
                $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationAttache ();
                $idEtablissement = Atexo_User_CurrentUser::getIdEtablissementGere ();
                $this->_criteriaVo->setIdOrganisation ( $idOrganisation );
                $this->_criteriaVo->setIdEtablissement ( $idEtablissement );
                $this->listeOrganisation->SelectedValue = $idOrganisation;
                $this->listeOrganisation->Enabled = false;
                $this->ajoutPanelHaut->setVisible ( false );
                $this->ajoutPanelBas->setVisible ( false );
            }
            $this->_criteriaVo->setSortByElement ( "DENOMINATION_ETABLISSEMENT" );
            $_SESSION["etab"]["sortByElement"] = "DENOMINATION_ETABLISSEMENT";
            $_SESSION["etab"]["sensTri"] = "ASC";
        }
        else {
            if ( $adminOrg ) {
                $idOrganisation = $this->_criteriaVo->getIdOrganisation ();
                $this->listeOrganisation->SelectedValue = $idOrganisation;
                $this->listeOrganisation->Enabled = false;
            }
            if ( $adminEtab ) {
                $idOrganisation = $this->_criteriaVo->getIdOrganisation ();
                $this->listeOrganisation->SelectedValue = $idOrganisation;
                $this->listeOrganisation->Enabled = false;
                $this->ajoutPanelHaut->setVisible ( false );
                $this->ajoutPanelBas->setVisible ( false );
            }
            $this->populateFiltres();
        }
        $this->_criteriaVo->setLang ( $this->_lang );

        if( isset( $_GET["pages"] ) ) {
            $this->_criteriaVo->setPages($_GET["pages"]);
        }
        else {
            if(!$this->_criteriaVo->getPages()) {
                $this->_criteriaVo->setPages(1);
            }
        }

        if( isset( $_GET["pageSize"] ) ) {
            $ps = Atexo_Pagination_Controller::verifierPageSizePagination( $_GET["pageSize"] );
            $this->listeEtablissement->PageSize = $ps;
            $this->_criteriaVo->setPageSize( $ps );
        }
        elseif ( !$this->_criteriaVo->getPageSize() ) {
            $this->_criteriaVo->setPageSize(10);
        }
        $this->fillRepeaterWithDataForSearchResult();
    }

    protected function populateFiltres () {
        $this->loadEntite1();
        if($this->_criteriaVo->getEntite1()) {
            $this->entite1->setSelectedValue($this->_criteriaVo->getEntite1());
        }
        $this->loadEntite2();
        if($this->_criteriaVo->getEntite2()) {
            $this->entite2->setSelectedValue($this->_criteriaVo->getEntite2());
        }
        $this->loadEntite3();
        if($this->_criteriaVo->getEntite3()) {
            $this->entite3->setSelectedValue($this->_criteriaVo->getEntite3());
        }
    }

	/**
	 * Remplir la liste des organisations 
	 */
	public function loadOrganisation() {
		$organisationGestion = new Atexo_Organisation_Gestion();
		$this->listeOrganisation->DataSource = $organisationGestion->getAllOrganisation($this->_lang, Prado::localize('SELECTIONNEZ'));
		$this->listeOrganisation->DataBind();
	}

	/**
	 * Remplir repeater des établissements selon les critères de recherche
	 */
    private function fillRepeaterWithDataForSearchResult()
	{
		$tEtablissementPeer = new TEtablissementPeer();
		//Nombre des Etablissements
		$nombreElement = $tEtablissementPeer->getEtablissementByCriteres($this->_criteriaVo, true);
		if ($nombreElement>=1) {
			$this->nombreElement->Text=$nombreElement;
			$this->PagerBottom->setVisible(true);
			$this->PagerTop->setVisible(true);
			$this->panelBottom->setVisible(true);
			$this->panelTop->setVisible(true);
			$this->setViewState("nombreElement",$nombreElement);
			$this->listeEtablissement->setVirtualItemCount($nombreElement);
			$this->listeEtablissement->setCurrentPageIndex(0);
			$this->populateData();
		} else {
			$this->PagerBottom->setVisible(false);
			$this->PagerTop->setVisible(false);
			$this->panelTop->setVisible(false);
			$this->panelBottom->setVisible(false);
			$this->listeEtablissement->DataSource=array();
			$this->listeEtablissement->DataBind();
			$this->nombreElement->Text="0";
		}
        $_SESSION["etab"]["criteriaVoSearch"] = $this->_criteriaVo;
	}

	/**
	 * Rechercher Etablissement par critères 
	 */
	protected function suggestNames($sender,$param) {
        try {

            $adminOrg = Atexo_User_CurrentUser::isAdminOrg();
            $adminEtab = Atexo_User_CurrentUser::isAdminEtab() || Atexo_User_CurrentUser::isAdminOrgWithEtab();
            $this->_criteriaVo = new Atexo_Etablissement_CriteriaVo();
            
            if ( $adminOrg ) {
                $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationGere ();
                $this->_criteriaVo->setIdOrganisation ( $idOrganisation );
            }
            if ( $adminEtab ) {
                $idOrganisation = Atexo_User_CurrentUser::getIdOrganisationAttache();
                $idEtablissement = Atexo_User_CurrentUser::getIdEtablissementGere();
                $this->_criteriaVo->setIdOrganisation($idOrganisation);
                $this->_criteriaVo->setIdEtablissement($idEtablissement);
            }

            $token = $this->listeOrganisation->getSelectedValue ();
            // Sender is the Suggestions repeater

            $this->_criteriaVo->setLang ( $this->_lang );
            $this->_criteriaVo->setIdOrganisation ( $token );
            $this->_criteriaVo->setSuggest ( true );

            if ( $this->entite1->getSelectedValue () > 0 ) {
                $this->_criteriaVo->setEntite1 ( $this->entite1->getSelectedValue () );
                $this->_criteriaVo->setIdEntite( $this->entite1->getSelectedValue () );
            }
            if ( $this->entite2->getSelectedValue () > 0 ) {
                $this->_criteriaVo->setEntite2 ( $this->entite2->getSelectedValue () );
                $this->_criteriaVo->setIdEntite( $this->entite2->getSelectedValue () );
            }
            if ( $this->entite3->getSelectedValue () > 0 ) {
                $this->_criteriaVo->setEntite3 ( $this->entite3->getSelectedValue () );
                $this->_criteriaVo->setIdEntite( $this->entite3->getSelectedValue () );
            }

            $this->_criteriaVo->setPages(1);
            $this->_criteriaVo->setPageSize(10);

            // tri
            $this->_criteriaVo->setSortByElement($_SESSION["etab"]["sortByElement"]);
            $this->_criteriaVo->setSensOrderBy($_SESSION["etab"]["sensTri"]);

            unset($_GET["pageSize"]);
            unset($_GET["pages"]);

            $this->fillRepeaterWithDataForSearchResult ();
            $this->etablissementPanel->render ( $param->getNewWriter () );
            $this->etablissementPanel->style = "display:block";
        } catch(Exception $e) {
            $logger = Atexo_LoggerManager::getLogger("rdvLogErreur");
            $logger->error($e->getMessage());
        }
	}


	/**
	 * Peupler les données d'établissements
	 */
	public function populateData()
	{
		$nombreElement = $this->getViewState("nombreElement");
        $pageSize = $this->_criteriaVo->getPageSize();
        $nombrePages = ceil($nombreElement / $pageSize);

        if(isset($_GET["pages"])) {
            $numPage = Atexo_Pagination_Controller::verifierPagePagination($_GET["pages"], $this->listeEtablissement->CurrentPageIndex+1, $nombrePages);
            $this->_criteriaVo->setPages($numPage);
        }elseif($this->_criteriaVo->getPages()){
            $numPage = $this->_criteriaVo->getPages();
        }
        $this->listeEtablissement->CurrentPageIndex = $numPage -1;

		$offset = $this->listeEtablissement->CurrentPageIndex * $pageSize;
		$limit = $pageSize;
        $this->listeEtablissement->PageSize = $limit;

		if ($offset + $limit > $nombreElement) {
			$limit = $nombreElement - $offset;
		}
        $this->_criteriaVo->setOffset($offset);
        $this->_criteriaVo->setLimit($limit);

		$dataEtablissement = TEtablissementPeer::getEtablissementByCriteres($this->_criteriaVo);

		$this->listeEtablissement->DataSource = $dataEtablissement;
		$this->listeEtablissement->DataBind();

		$this->repeatMap->DataSource = $dataEtablissement;
		$this->repeatMap->DataBind();

        $this->numPageBottom->Text = $numPage;
        $this->numPageTop->Text = $numPage;
        $this->nombreResultatAfficherTop->setSelectedValue( $pageSize );
        $this->nombreResultatAfficherBottom->setSelectedValue( $pageSize );
        $this->nombrePageTop->Text = $nombrePages;
        $this->nombrePageBottom->Text = $nombrePages;
	}

	public function Trier($sender,$param)
	{
        try {
            $champsOrderBy = $sender->CommandParameter;

            $_SESSION["etab"]["sortByElement"] = $champsOrderBy;
            $this->_criteriaVo->setSortByElement ( $champsOrderBy );

            $_SESSION["etab"]["sensTri"] = ( $this->_criteriaVo->getSensOrderBy () == "ASC" ) ? "DESC" : "ASC";
            $this->_criteriaVo->setSensOrderBy ( $_SESSION["etab"]["sensTri"] );

            $_SESSION[ "criteriaVoSearch" ] = $this->_criteriaVo;
            unset($_GET["pages"]);
            $this->_criteriaVo->setPages(1);

            $this->populateData();
            $this->etablissementPanel->render($param->getNewWriter());
        } catch(Exception $e) {
            $logger = Atexo_LoggerManager::getLogger("rdvLogErreur");
            $logger->error($e->getMessage());
        }
	}

	public function pageChanged($sender,$param)
	{
        $urlParams = "&pages=".($param->NewPageIndex+1);
        if(isset($_GET["pageSize"])) {
            $urlParams .= "&pageSize=".$_GET["pageSize"];
        }

        $this->response->redirect("?page=administration.GestionEtablissements&search".$urlParams);
	}


	public function goToPage($sender)
	{
		switch ($sender->ID) {
			case "DefaultButtonTop" :    $numPage=$this->numPageTop->Text;
			break;
			case "DefaultButtonBottom" : $numPage=$this->numPageBottom->Text;
			break;
		}
        $urlParams = "&pages=" . Atexo_Pagination_Controller::verifierPagePagination($numPage, $this->listeEtablissement->CurrentPageIndex+1, $this->nombrePageTop->Text);
        if(isset($_GET["pageSize"])) {
            $urlParams .= "&pageSize=".$_GET["pageSize"];
        }
        $this->response->redirect("?page=administration.GestionEtablissements&search".$urlParams);
	}

	public function changePagerLenght($sender)
	{
		switch ($sender->ID) {
			case "nombreResultatAfficherBottom" :
                $pageSize = Atexo_Pagination_Controller::verifierPageSizePagination( $this->nombreResultatAfficherBottom->getSelectedValue() );
			    break;
			case "nombreResultatAfficherTop" :
                $pageSize = Atexo_Pagination_Controller::verifierPageSizePagination( $this->nombreResultatAfficherTop->getSelectedValue() );
			    break;
		}

        $this->response->redirect("?page=administration.GestionEtablissements&search&pages=1&pageSize=".$pageSize);
	}

	/**
	 * 
	 * Confirmer la suppression d'un établissement
	 */
	public function onConfirmSuppressionClick($sender,$param) {
        try {
            $tEtablissementQuery = new TEtablissementQuery();
            $idEtablissement = $this->etablissementToDeleteHidden->Value;
            $tEtablissement = $tEtablissementQuery->getEtablissementById ( $idEtablissement );

            $typePrestationGestion = new Atexo_TypePrestation_Gestion();
            $tabPres = $typePrestationGestion->getTypePrestationByIdEtab ( $this->_lang, $idEtablissement, false );

            if ( $tEtablissement instanceof TEtablissement ) {
                if ( count ( $tabPres ) == 0 ) {
                    $connexion = Propel:: getConnection ( Atexo_Config::getParameter ( "DB_NAME" ) . Atexo_Config::getParameter ( "CONST_READ_ONLY" ) );
                    $connexion->beginTransaction ();

                    $tTraductionDenomination = $tEtablissement->getTTraductionRelatedByCodeDenominationEtablissement ();
                    $tTraductionAdresse = $tEtablissement->getTTraductionRelatedByCodeAdresseEtablissement ();
                    $tTraductionDescription = $tEtablissement->getTTraductionRelatedByCodeDescriptionEtablissement ();

                    $tEtablissement->delete ( $connexion );

                    //Denomination
                    $tTraductionDenomination->deleteAll ( $connexion );
                    //Adresse
                    $tTraductionAdresse->deleteAll ( $connexion );
                    //Description
                    $tTraductionDescription->deleteAll ( $connexion );
                    $connexion->commit ();

                    $this->paneldeleteFail->style = "display:none";
                    $this->paneldeleteOk->style = "display:block";
                } else {
                    $this->paneldeleteOk->style = "display:none";
                    $this->paneldeleteFail->style = "display:block";
                }
            }

            //Remplir repeater Etablissement
            $this->fillRepeaterWithDataForSearchResult ();
            $this->etablissementPanel->render ( $param->getNewWriter () );
        } catch(Exception $e) {
            $logger = Atexo_LoggerManager::getLogger("rdvLogErreur");
            $logger->error($e->getMessage());
        }
	}

    public function isTrierPar($champ) {
        $sortByElement = $_SESSION["etab"]["sortByElement"];
        if($champ!=$sortByElement) {
            return "";
        }
        if( $_SESSION["etab"]["sensTri"] == "ASC" ) {
            return "tri-on tri-asc";
        }
        return "tri-on tri-desc";
    }
	
	/**
	 * 
	 * Telecharger le plan d'accès
	 */
	public function downloadPlanAcces($sender) {
		$idFichier = $sender->CommandParameter;
		Atexo_DownloadFile::downloadFiles($idFichier);
	}

    /**
     * Remplir la liste des regions
     */
    public function loadEntite1($sender=null, $param=null) {
        $entiteGestion = new Atexo_Entite_Gestion();
        $this->entite1->DataSource = $entiteGestion->getAllEntite(1, $this->_lang, null, Prado::localize('ENTITE_1'));
        $this->entite1->DataBind();
        if($sender) {
            $this->suggestNames($sender, $param);
        }
    }

    /**
     * Remplir la liste des provinces
     */
    public function loadEntite2($sender = null, $param=null) {
        $entiteGestion = new Atexo_Entite_Gestion();
        $this->entite2->DataSource = $entiteGestion->getAllEntite(2, $this->_lang, $this->entite1->SelectedValue, Prado::localize('ENTITE_2'));
        $this->entite2->DataBind();
        if($sender) {
            $this->loadEntite3();
            $this->suggestNames($sender, $param);
        }
    }

    /**
     * Remplir la liste des communes
     */
    public function loadEntite3($sender = null, $param=null) {
        $entiteGestion = new Atexo_Entite_Gestion();
        $idEntite = null;

        if($this->entite2->SelectedValue) {
            $idEntite = $this->entite2->SelectedValue;
        }elseif($this->entite1->SelectedValue){
            $idEntite = $entiteGestion->getAllIdChildEntite($this->entite1->SelectedValue);
        }
        $this->entite3->DataSource = $entiteGestion->getAllEntite(3, $this->_lang, $idEntite, Prado::localize('ENTITE_3'));
        $this->entite3->DataBind();
        if($sender) {
            $this->suggestNames($sender, $param);
        }
    }

    /**
     * vider la liste des provinces
     */
    public function viderEntite2() {
        $this->_criteriaVo->setEntite2(false);
        $this->entite2->DataSource = array(Prado::localize('ENTITE_2'));
        $this->entite2->DataBind();
    }

    /**
     * vider la liste des communes
     */
    public function viderEntite3() {
        $this->_criteriaVo->setEntite3(false);
        $this->entite3->DataSource = array(Prado::localize('ENTITE_3'));
        $this->entite3->DataBind();
    }
}