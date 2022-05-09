<?php



/**
 * This class defines the structure of the 'T_TYPE_ETAB' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.RDV.map
 */
class TTypeEtabTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'RDV.map.TTypeEtabTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('T_TYPE_ETAB');
        $this->setPhpName('TTypeEtab');
        $this->setClassname('TTypeEtab');
        $this->setPackage('RDV');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TYPE_ETAB', 'IdTypeEtab', 'INTEGER', true, null, null);
        $this->addColumn('ID_ORGANISATION', 'IdOrganisation', 'INTEGER', true, null, null);
        $this->addForeignKey('CODE_LIBELLE', 'CodeLibelle', 'INTEGER', 'T_TRADUCTION', 'ID_TRADUCTION', true, null, null);
        $this->addColumn('NIVEAU', 'Niveau', 'CHAR', true, null, null);
        $this->getColumn('NIVEAU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
));
        $this->addColumn('DETAIL_PRESTATION', 'DetailPrestation', 'CHAR', true, null, null);
        $this->getColumn('DETAIL_PRESTATION', false)->setValueSet(array (
            0 => '0',
            1 => '1',
        ));
        $this->addForeignKey('CODE_LIBELLE_ETAB', 'CodeLibelleEtab', 'INTEGER', 'T_TRADUCTION', 'ID_TRADUCTION', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TTraductionRelatedByCodeLibelle', 'TTraduction', RelationMap::MANY_TO_ONE, array('CODE_LIBELLE' => 'ID_TRADUCTION', ), null, null);
        $this->addRelation('TTraductionRelatedByCodeLibelleEtab', 'TTraduction', RelationMap::MANY_TO_ONE, array('CODE_LIBELLE_ETAB' => 'ID_TRADUCTION', ), null, null);
        $this->addRelation('TEtablissement', 'TEtablissement', RelationMap::ONE_TO_MANY, array('ID_TYPE_ETAB' => 'ID_TYPE_ETAB', ), null, null, 'TEtablissements');
    } // buildRelations()

} // TTypeEtabTableMap
