<?php

class ListePrestation extends AtexoPage {

    public function onInit()
    {
        $this->Master->setCalledFrom("citoyen");
        Atexo_Utils_Languages::setLanguageCatalogue($this->Master->getCalledFrom());
    }

    public function onLoad(){
        $lang = Atexo_User_CurrentUser::readFromSession("lang");
        $criteriaVoPrestation = new Atexo_Prestation_CriteriaVo();
        if(isset($_GET["idType"])){
            $idType = $_GET["idType"];
            $tTypeEtab = TTypeEtabPeer::retrieveByPK($idType);
            $c = new Criteria();
            $c->add(TEtablissementPeer::ID_TYPE_ETAB, $idType);
            $etablissements = TEtablissementPeer::doSelect($c);
            $this->titre->Text = $tTypeEtab->getLibelleTypeEtabTraduit($lang);
            $etablissementsIds = [];

            foreach($etablissements as $etablissement){
                $etablissementsIds[] = $etablissement->getIdEtablissement();
            }
            $criteriaVoPrestation->setIdEtablissement(implode(",", $etablissementsIds));
        }
        $criteriaVoPrestation->setLang($lang);
        $criteriaVoPrestation->setPrestationReferentiel($_SESSION["typePrestation"]);
        $criteriaVoPrestation->setIdOrganisation($_COOKIE["idOrg"]);
        $dataPrestation = TPrestationPeer::getPrestationByCriteres($criteriaVoPrestation);

        $prestationVisio = [];
        $prestationNonVisio = [];

        foreach ($dataPrestation as $prestation){
            if($prestation["VISIOCONFERENCE"] == "1"){
                $prestationVisio[] = [
                    "etablissement_libelle" => $prestation["LIBELLE_ETAB"],
                    "prestation_libelle" => $prestation["LIBELLE_PRESTATION"]
                ];
            }else{
                $prestationNonVisio[] = [
                    "etablissement_libelle" => $prestation["LIBELLE_ETAB"],
                    "prestation_libelle" => $prestation["LIBELLE_PRESTATION"]
                ];
            }
        }

        $this->listePrestationVisio->datasource = $prestationVisio;
        $this->listePrestationVisio->DataBind();

        $this->listePrestationNonVisio->datasource = $prestationNonVisio;
        $this->listePrestationNonVisio->DataBind();
    }
}