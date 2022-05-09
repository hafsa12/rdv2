<?php


/**
 * Base static class for performing query and update operations on the 'T_TYPE_ETAB' table.
 *
 *
 *
 * @package propel.generator.RDV.om
 */
abstract class BaseTTypeEtabPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'RDV';

    /** the table name for this class */
    const TABLE_NAME = 'T_TYPE_ETAB';

    /** the related Propel class for this table */
    const OM_CLASS = 'TTypeEtab';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TTypeEtabTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the ID_TYPE_ETAB field */
    const ID_TYPE_ETAB = 'T_TYPE_ETAB.ID_TYPE_ETAB';

    /** the column name for the ID_ORGANISATION field */
    const ID_ORGANISATION = 'T_TYPE_ETAB.ID_ORGANISATION';

    /** the column name for the CODE_LIBELLE field */
    const CODE_LIBELLE = 'T_TYPE_ETAB.CODE_LIBELLE';

    /** the column name for the NIVEAU field */
    const NIVEAU = 'T_TYPE_ETAB.NIVEAU';

    /** the column name for the CODE_LIBELLE_ETAB field */
    const CODE_LIBELLE_ETAB = 'T_TYPE_ETAB.CODE_LIBELLE_ETAB';

    /** the column name for the DETAIL_PRESTATION field */
    const DETAIL_PRESTATION = 'T_TYPE_ETAB.DETAIL_PRESTATION';

    /** The enumerated values for the NIVEAU field */
    const NIVEAU_0 = '0';
    const NIVEAU_1 = '1';
    const NIVEAU_2 = '2';
    const NIVEAU_3 = '3';

    /** The enumerated values for the DETAIL_PRESTATION field */
    const DETAIL_PRESTATION_0 = '0';
    const DETAIL_PRESTATION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of TTypeEtab objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TTypeEtab[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TTypeEtabPeer::$fieldNames[TTypeEtabPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeEtab', 'IdOrganisation', 'CodeLibelle', 'Niveau', 'CodeLibelleEtab', 'DetailPrestation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeEtab', 'idOrganisation', 'codeLibelle', 'niveau', 'codeLibelleEtab', 'detailPrestation', ),
        BasePeer::TYPE_COLNAME => array (TTypeEtabPeer::ID_TYPE_ETAB, TTypeEtabPeer::ID_ORGANISATION, TTypeEtabPeer::CODE_LIBELLE, TTypeEtabPeer::NIVEAU, TTypeEtabPeer::CODE_LIBELLE_ETAB, TTypeEtabPeer::DETAIL_PRESTATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_ETAB', 'ID_ORGANISATION', 'CODE_LIBELLE', 'NIVEAU', 'CODE_LIBELLE_ETAB', 'DETAIL_PRESTATION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_TYPE_ETAB', 'ID_ORGANISATION', 'CODE_LIBELLE', 'NIVEAU', 'CODE_LIBELLE_ETAB', 'DETAIL_PRESTATION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TTypeEtabPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeEtab' => 0, 'IdOrganisation' => 1, 'CodeLibelle' => 2, 'Niveau' => 3, 'CodeLibelleEtab' => 4, 'DetailPrestation' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeEtab' => 0, 'idOrganisation' => 1, 'codeLibelle' => 2, 'niveau' => 3, 'codeLibelleEtab' => 4, 'detailPrestation' => 5, ),
        BasePeer::TYPE_COLNAME => array (TTypeEtabPeer::ID_TYPE_ETAB => 0, TTypeEtabPeer::ID_ORGANISATION => 1, TTypeEtabPeer::CODE_LIBELLE => 2, TTypeEtabPeer::NIVEAU => 3, TTypeEtabPeer::CODE_LIBELLE_ETAB => 4, TTypeEtabPeer::DETAIL_PRESTATION => 5 ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_ETAB' => 0, 'ID_ORGANISATION' => 1, 'CODE_LIBELLE' => 2, 'NIVEAU' => 3, 'CODE_LIBELLE_ETAB' => 4,  'DETAIL_PRESTATION' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_TYPE_ETAB' => 0, 'ID_ORGANISATION' => 1, 'CODE_LIBELLE' => 2, 'NIVEAU' => 3, 'CODE_LIBELLE_ETAB' => 4,  'DETAIL_PRESTATION' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TTypeEtabPeer::NIVEAU => array(
            TTypeEtabPeer::NIVEAU_0,
            TTypeEtabPeer::NIVEAU_1,
            TTypeEtabPeer::NIVEAU_2,
            TTypeEtabPeer::NIVEAU_3,
        ),
        TTypeEtabPeer::DETAIL_PRESTATION => array(
            TTypeEtabPeer::DETAIL_PRESTATION_0,
            TTypeEtabPeer::DETAIL_PRESTATION_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = TTypeEtabPeer::getFieldNames($toType);
        $key = isset(TTypeEtabPeer::$fieldKeys[$fromType][$name]) ? TTypeEtabPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TTypeEtabPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, TTypeEtabPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TTypeEtabPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TTypeEtabPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = TTypeEtabPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int            SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = TTypeEtabPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }
        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. TTypeEtabPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TTypeEtabPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TTypeEtabPeer::ID_TYPE_ETAB);
            $criteria->addSelectColumn(TTypeEtabPeer::ID_ORGANISATION);
            $criteria->addSelectColumn(TTypeEtabPeer::CODE_LIBELLE);
            $criteria->addSelectColumn(TTypeEtabPeer::NIVEAU);
            $criteria->addSelectColumn(TTypeEtabPeer::CODE_LIBELLE_ETAB);
            $criteria->addSelectColumn(TTypeEtabPeer::DETAIL_PRESTATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID_TYPE_ETAB');
            $criteria->addSelectColumn($alias . '.ID_ORGANISATION');
            $criteria->addSelectColumn($alias . '.CODE_LIBELLE');
            $criteria->addSelectColumn($alias . '.NIVEAU');
            $criteria->addSelectColumn($alias . '.CODE_LIBELLE_ETAB');
            $criteria->addSelectColumn($alias . '.DETAIL_PRESTATION');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 TTypeEtab
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TTypeEtabPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return TTypeEtabPeer::populateObjects(TTypeEtabPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      TTypeEtab $obj A TTypeEtab object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTypeEtab();
            } // if key === null
            TTypeEtabPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A TTypeEtab object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TTypeEtab) {
                $key = (string) $value->getIdTypeEtab();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TTypeEtab object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TTypeEtabPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TTypeEtab Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TTypeEtabPeer::$instances[$key])) {
                return TTypeEtabPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (TTypeEtabPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        TTypeEtabPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to T_TYPE_ETAB
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = TTypeEtabPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TTypeEtabPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TTypeEtabPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (TTypeEtab object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TTypeEtabPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TTypeEtabPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TTypeEtabPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TTypeEtabPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related TTraductionRelatedByCodeLibelle table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTTraductionRelatedByCodeLibelle(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TTraductionRelatedByCodeLibelleEtab table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTTraductionRelatedByCodeLibelleEtab(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE_ETAB, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of TTypeEtab objects pre-filled with their TTraduction objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of TTypeEtab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTTraductionRelatedByCodeLibelle(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);
        }

        TTypeEtabPeer::addSelectColumns($criteria);
        $startcol = TTypeEtabPeer::NUM_HYDRATE_COLUMNS;
        TTraductionPeer::addSelectColumns($criteria);

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TTypeEtabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TTypeEtabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TTypeEtabPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TTraductionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TTraductionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TTraductionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TTraductionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (TTypeEtab) to $obj2 (TTraduction)
                $obj2->addTTypeEtabRelatedByCodeLibelle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of TTypeEtab objects pre-filled with their TTraduction objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of TTypeEtab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTTraductionRelatedByCodeLibelleEtab(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);
        }

        TTypeEtabPeer::addSelectColumns($criteria);
        $startcol = TTypeEtabPeer::NUM_HYDRATE_COLUMNS;
        TTraductionPeer::addSelectColumns($criteria);

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE_ETAB, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TTypeEtabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TTypeEtabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TTypeEtabPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TTraductionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TTraductionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TTraductionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TTraductionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (TTypeEtab) to $obj2 (TTraduction)
                $obj2->addTTypeEtabRelatedByCodeLibelleEtab($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE_ETAB, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of TTypeEtab objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of TTypeEtab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);
        }

        TTypeEtabPeer::addSelectColumns($criteria);
        $startcol2 = TTypeEtabPeer::NUM_HYDRATE_COLUMNS;

        TTraductionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TTraductionPeer::NUM_HYDRATE_COLUMNS;

        TTraductionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TTraductionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $criteria->addJoin(TTypeEtabPeer::CODE_LIBELLE_ETAB, TTraductionPeer::ID_TRADUCTION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TTypeEtabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TTypeEtabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TTypeEtabPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined TTraduction rows

            $key2 = TTraductionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = TTraductionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TTraductionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TTraductionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (TTypeEtab) to the collection in $obj2 (TTraduction)
                $obj2->addTTypeEtabRelatedByCodeLibelle($obj1);
            } // if joined row not null

            // Add objects for joined TTraduction rows

            $key3 = TTraductionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = TTraductionPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = TTraductionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TTraductionPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (TTypeEtab) to the collection in $obj3 (TTraduction)
                $obj3->addTTypeEtabRelatedByCodeLibelleEtab($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TTraductionRelatedByCodeLibelle table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTTraductionRelatedByCodeLibelle(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TTraductionRelatedByCodeLibelleEtab table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTTraductionRelatedByCodeLibelleEtab(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TTypeEtabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of TTypeEtab objects pre-filled with all related objects except TTraductionRelatedByCodeLibelle.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of TTypeEtab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTTraductionRelatedByCodeLibelle(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);
        }

        TTypeEtabPeer::addSelectColumns($criteria);
        $startcol2 = TTypeEtabPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TTypeEtabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TTypeEtabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TTypeEtabPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of TTypeEtab objects pre-filled with all related objects except TTraductionRelatedByCodeLibelleEtab.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of TTypeEtab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTTraductionRelatedByCodeLibelleEtab(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);
        }

        TTypeEtabPeer::addSelectColumns($criteria);
        $startcol2 = TTypeEtabPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TTypeEtabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TTypeEtabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TTypeEtabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TTypeEtabPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(TTypeEtabPeer::DATABASE_NAME)->getTable(TTypeEtabPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTTypeEtabPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTTypeEtabPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TTypeEtabTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return TTypeEtabPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TTypeEtab or Criteria object.
     *
     * @param      mixed $values Criteria or TTypeEtab object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TTypeEtab object
        }

        if ($criteria->containsKey(TTypeEtabPeer::ID_TYPE_ETAB) && $criteria->keyContainsValue(TTypeEtabPeer::ID_TYPE_ETAB) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TTypeEtabPeer::ID_TYPE_ETAB.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a TTypeEtab or Criteria object.
     *
     * @param      mixed $values Criteria or TTypeEtab object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TTypeEtabPeer::ID_TYPE_ETAB);
            $value = $criteria->remove(TTypeEtabPeer::ID_TYPE_ETAB);
            if ($value) {
                $selectCriteria->add(TTypeEtabPeer::ID_TYPE_ETAB, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TTypeEtabPeer::TABLE_NAME);
            }

        } else { // $values is TTypeEtab object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the T_TYPE_ETAB table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TTypeEtabPeer::TABLE_NAME, $con, TTypeEtabPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TTypeEtabPeer::clearInstancePool();
            TTypeEtabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TTypeEtab or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TTypeEtab object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TTypeEtabPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TTypeEtab) { // it's a model object
            // invalidate the cache for this single object
            TTypeEtabPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);
            $criteria->add(TTypeEtabPeer::ID_TYPE_ETAB, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TTypeEtabPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TTypeEtabPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TTypeEtabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TTypeEtab object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TTypeEtab $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TTypeEtabPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TTypeEtabPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(TTypeEtabPeer::DATABASE_NAME, TTypeEtabPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TTypeEtab
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TTypeEtabPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);
        $criteria->add(TTypeEtabPeer::ID_TYPE_ETAB, $pk);

        $v = TTypeEtabPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TTypeEtab[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);
            $criteria->add(TTypeEtabPeer::ID_TYPE_ETAB, $pks, Criteria::IN);
            $objs = TTypeEtabPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTTypeEtabPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTTypeEtabPeer::buildTableMap();

