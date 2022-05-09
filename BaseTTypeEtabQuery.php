<?php


/**
 * Base class that represents a query for the 'T_TYPE_ETAB' table.
 *
 *
 *
 * @method TTypeEtabQuery orderByIdTypeEtab($order = Criteria::ASC) Order by the ID_TYPE_ETAB column
 * @method TTypeEtabQuery orderByIdOrganisation($order = Criteria::ASC) Order by the ID_ORGANISATION column
 * @method TTypeEtabQuery orderByCodeLibelle($order = Criteria::ASC) Order by the CODE_LIBELLE column
 * @method TTypeEtabQuery orderByNiveau($order = Criteria::ASC) Order by the NIVEAU column
 * @method TTypeEtabQuery orderByCodeLibelleEtab($order = Criteria::ASC) Order by the CODE_LIBELLE_ETAB column
 * @method TTypeEtabQuery orderDetailPrestation($order = Criteria::ASC) Order by the DETAIL_PRESTATION column
 *
 * @method TTypeEtabQuery groupByIdTypeEtab() Group by the ID_TYPE_ETAB column
 * @method TTypeEtabQuery groupByIdOrganisation() Group by the ID_ORGANISATION column
 * @method TTypeEtabQuery groupByCodeLibelle() Group by the CODE_LIBELLE column
 * @method TTypeEtabQuery groupByNiveau() Group by the NIVEAU column
 * @method TTypeEtabQuery groupByCodeLibelleEtab() Group by the CODE_LIBELLE_ETAB column
 * @method TTypeEtabQuery groupDetailPrestation() Group by the DETAIL_PRESTATION column
 *
 * @method TTypeEtabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TTypeEtabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TTypeEtabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TTypeEtabQuery leftJoinTTraductionRelatedByCodeLibelle($relationAlias = null) Adds a LEFT JOIN clause to the query using the TTraductionRelatedByCodeLibelle relation
 * @method TTypeEtabQuery rightJoinTTraductionRelatedByCodeLibelle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TTraductionRelatedByCodeLibelle relation
 * @method TTypeEtabQuery innerJoinTTraductionRelatedByCodeLibelle($relationAlias = null) Adds a INNER JOIN clause to the query using the TTraductionRelatedByCodeLibelle relation
 *
 * @method TTypeEtabQuery leftJoinTTraductionRelatedByCodeLibelleEtab($relationAlias = null) Adds a LEFT JOIN clause to the query using the TTraductionRelatedByCodeLibelleEtab relation
 * @method TTypeEtabQuery rightJoinTTraductionRelatedByCodeLibelleEtab($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TTraductionRelatedByCodeLibelleEtab relation
 * @method TTypeEtabQuery innerJoinTTraductionRelatedByCodeLibelleEtab($relationAlias = null) Adds a INNER JOIN clause to the query using the TTraductionRelatedByCodeLibelleEtab relation
 *
 * @method TTypeEtabQuery leftJoinTEtablissement($relationAlias = null) Adds a LEFT JOIN clause to the query using the TEtablissement relation
 * @method TTypeEtabQuery rightJoinTEtablissement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TEtablissement relation
 * @method TTypeEtabQuery innerJoinTEtablissement($relationAlias = null) Adds a INNER JOIN clause to the query using the TEtablissement relation
 *
 * @method TTypeEtab findOne(PropelPDO $con = null) Return the first TTypeEtab matching the query
 * @method TTypeEtab findOneOrCreate(PropelPDO $con = null) Return the first TTypeEtab matching the query, or a new TTypeEtab object populated from the query conditions when no match is found
 *
 * @method TTypeEtab findOneByIdOrganisation(int $ID_ORGANISATION) Return the first TTypeEtab filtered by the ID_ORGANISATION column
 * @method TTypeEtab findOneByCodeLibelle(int $CODE_LIBELLE) Return the first TTypeEtab filtered by the CODE_LIBELLE column
 * @method TTypeEtab findOneByNiveau(string $NIVEAU) Return the first TTypeEtab filtered by the NIVEAU column
 * @method TTypeEtab findOneByCodeLibelleEtab(int $CODE_LIBELLE_ETAB) Return the first TTypeEtab filtered by the CODE_LIBELLE_ETAB column
 * @method TTypeEtab findOneByDetailPrestation(int $DETAIL_PRESTATION) Return the first TTypeEtab filtered by the DETAIL_PRESTATION column
 *
 * @method array findByIdTypeEtab(int $ID_TYPE_ETAB) Return TTypeEtab objects filtered by the ID_TYPE_ETAB column
 * @method array findByIdOrganisation(int $ID_ORGANISATION) Return TTypeEtab objects filtered by the ID_ORGANISATION column
 * @method array findByCodeLibelle(int $CODE_LIBELLE) Return TTypeEtab objects filtered by the CODE_LIBELLE column
 * @method array findByNiveau(string $NIVEAU) Return TTypeEtab objects filtered by the NIVEAU column
 * @method array findByCodeLibelleEtab(int $CODE_LIBELLE_ETAB) Return TTypeEtab objects filtered by the CODE_LIBELLE_ETAB column
 *  @method array findByDetailPrestation(int $DETAIL_PRESTATION) Return TTypeEtab objects filtered by the DETAIL_PRESTATION column
 *
 * @package    propel.generator.RDV.om
 */
abstract class BaseTTypeEtabQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTTypeEtabQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'RDV', $modelName = 'TTypeEtab', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TTypeEtabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TTypeEtabQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TTypeEtabQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TTypeEtabQuery) {
            return $criteria;
        }
        $query = new TTypeEtabQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TTypeEtab|TTypeEtab[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TTypeEtabPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TTypeEtab A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTypeEtab($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TTypeEtab A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TYPE_ETAB`, `ID_ORGANISATION`, `CODE_LIBELLE`, `NIVEAU`, `CODE_LIBELLE_ETAB`, `DETAIL_PRESTATION` FROM `T_TYPE_ETAB` WHERE `ID_TYPE_ETAB` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new TTypeEtab();
            $obj->hydrate($row);
            TTypeEtabPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return TTypeEtab|TTypeEtab[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|TTypeEtab[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_TYPE_ETAB column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeEtab(1234); // WHERE ID_TYPE_ETAB = 1234
     * $query->filterByIdTypeEtab(array(12, 34)); // WHERE ID_TYPE_ETAB IN (12, 34)
     * $query->filterByIdTypeEtab(array('min' => 12)); // WHERE ID_TYPE_ETAB >= 12
     * $query->filterByIdTypeEtab(array('max' => 12)); // WHERE ID_TYPE_ETAB <= 12
     * </code>
     *
     * @param     mixed $idTypeEtab The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByIdTypeEtab($idTypeEtab = null, $comparison = null)
    {
        if (is_array($idTypeEtab)) {
            $useMinMax = false;
            if (isset($idTypeEtab['min'])) {
                $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $idTypeEtab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeEtab['max'])) {
                $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $idTypeEtab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $idTypeEtab, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisation(1234); // WHERE ID_ORGANISATION = 1234
     * $query->filterByIdOrganisation(array(12, 34)); // WHERE ID_ORGANISATION IN (12, 34)
     * $query->filterByIdOrganisation(array('min' => 12)); // WHERE ID_ORGANISATION >= 12
     * $query->filterByIdOrganisation(array('max' => 12)); // WHERE ID_ORGANISATION <= 12
     * </code>
     *
     * @param     mixed $idOrganisation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByIdOrganisation($idOrganisation = null, $comparison = null)
    {
        if (is_array($idOrganisation)) {
            $useMinMax = false;
            if (isset($idOrganisation['min'])) {
                $this->addUsingAlias(TTypeEtabPeer::ID_ORGANISATION, $idOrganisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisation['max'])) {
                $this->addUsingAlias(TTypeEtabPeer::ID_ORGANISATION, $idOrganisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTypeEtabPeer::ID_ORGANISATION, $idOrganisation, $comparison);
    }

    /**
     * Filter the query on the CODE_LIBELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeLibelle(1234); // WHERE CODE_LIBELLE = 1234
     * $query->filterByCodeLibelle(array(12, 34)); // WHERE CODE_LIBELLE IN (12, 34)
     * $query->filterByCodeLibelle(array('min' => 12)); // WHERE CODE_LIBELLE >= 12
     * $query->filterByCodeLibelle(array('max' => 12)); // WHERE CODE_LIBELLE <= 12
     * </code>
     *
     * @see       filterByTTraductionRelatedByCodeLibelle()
     *
     * @param     mixed $codeLibelle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByCodeLibelle($codeLibelle = null, $comparison = null)
    {
        if (is_array($codeLibelle)) {
            $useMinMax = false;
            if (isset($codeLibelle['min'])) {
                $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE, $codeLibelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeLibelle['max'])) {
                $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE, $codeLibelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE, $codeLibelle, $comparison);
    }

    /**
     * Filter the query on the NIVEAU column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveau('fooValue');   // WHERE NIVEAU = 'fooValue'
     * $query->filterByNiveau('%fooValue%'); // WHERE NIVEAU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $niveau The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByNiveau($niveau = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($niveau)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $niveau)) {
                $niveau = str_replace('*', '%', $niveau);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTypeEtabPeer::NIVEAU, $niveau, $comparison);
    }

    /**
     * Filter the query on the CODE_LIBELLE_ETAB column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeLibelleEtab(1234); // WHERE CODE_LIBELLE_ETAB = 1234
     * $query->filterByCodeLibelleEtab(array(12, 34)); // WHERE CODE_LIBELLE_ETAB IN (12, 34)
     * $query->filterByCodeLibelleEtab(array('min' => 12)); // WHERE CODE_LIBELLE_ETAB >= 12
     * $query->filterByCodeLibelleEtab(array('max' => 12)); // WHERE CODE_LIBELLE_ETAB <= 12
     * </code>
     *
     * @see       filterByTTraductionRelatedByCodeLibelleEtab()
     *
     * @param     mixed $codeLibelleEtab The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function filterByCodeLibelleEtab($codeLibelleEtab = null, $comparison = null)
    {
        if (is_array($codeLibelleEtab)) {
            $useMinMax = false;
            if (isset($codeLibelleEtab['min'])) {
                $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE_ETAB, $codeLibelleEtab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeLibelleEtab['max'])) {
                $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE_ETAB, $codeLibelleEtab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE_ETAB, $codeLibelleEtab, $comparison);
    }

    /**
     * Filter the query by a related TTraduction object
     *
     * @param   TTraduction|PropelObjectCollection $tTraduction The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TTypeEtabQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTTraductionRelatedByCodeLibelle($tTraduction, $comparison = null)
    {
        if ($tTraduction instanceof TTraduction) {
            return $this
                ->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE, $tTraduction->getIdTraduction(), $comparison);
        } elseif ($tTraduction instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE, $tTraduction->toKeyValue('PrimaryKey', 'IdTraduction'), $comparison);
        } else {
            throw new PropelException('filterByTTraductionRelatedByCodeLibelle() only accepts arguments of type TTraduction or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TTraductionRelatedByCodeLibelle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function joinTTraductionRelatedByCodeLibelle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TTraductionRelatedByCodeLibelle');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TTraductionRelatedByCodeLibelle');
        }

        return $this;
    }

    /**
     * Use the TTraductionRelatedByCodeLibelle relation TTraduction object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TTraductionQuery A secondary query class using the current class as primary query
     */
    public function useTTraductionRelatedByCodeLibelleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTTraductionRelatedByCodeLibelle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TTraductionRelatedByCodeLibelle', 'TTraductionQuery');
    }

    /**
     * Filter the query by a related TTraduction object
     *
     * @param   TTraduction|PropelObjectCollection $tTraduction The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TTypeEtabQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTTraductionRelatedByCodeLibelleEtab($tTraduction, $comparison = null)
    {
        if ($tTraduction instanceof TTraduction) {
            return $this
                ->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE_ETAB, $tTraduction->getIdTraduction(), $comparison);
        } elseif ($tTraduction instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TTypeEtabPeer::CODE_LIBELLE_ETAB, $tTraduction->toKeyValue('PrimaryKey', 'IdTraduction'), $comparison);
        } else {
            throw new PropelException('filterByTTraductionRelatedByCodeLibelleEtab() only accepts arguments of type TTraduction or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TTraductionRelatedByCodeLibelleEtab relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function joinTTraductionRelatedByCodeLibelleEtab($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TTraductionRelatedByCodeLibelleEtab');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TTraductionRelatedByCodeLibelleEtab');
        }

        return $this;
    }

    /**
     * Use the TTraductionRelatedByCodeLibelleEtab relation TTraduction object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TTraductionQuery A secondary query class using the current class as primary query
     */
    public function useTTraductionRelatedByCodeLibelleEtabQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTTraductionRelatedByCodeLibelleEtab($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TTraductionRelatedByCodeLibelleEtab', 'TTraductionQuery');
    }

    /**
     * Filter the query by a related TEtablissement object
     *
     * @param   TEtablissement|PropelObjectCollection $tEtablissement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TTypeEtabQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTEtablissement($tEtablissement, $comparison = null)
    {
        if ($tEtablissement instanceof TEtablissement) {
            return $this
                ->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $tEtablissement->getIdTypeEtab(), $comparison);
        } elseif ($tEtablissement instanceof PropelObjectCollection) {
            return $this
                ->useTEtablissementQuery()
                ->filterByPrimaryKeys($tEtablissement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTEtablissement() only accepts arguments of type TEtablissement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TEtablissement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function joinTEtablissement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TEtablissement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TEtablissement');
        }

        return $this;
    }

    /**
     * Use the TEtablissement relation TEtablissement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TEtablissementQuery A secondary query class using the current class as primary query
     */
    public function useTEtablissementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTEtablissement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TEtablissement', 'TEtablissementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TTypeEtab $tTypeEtab Object to remove from the list of results
     *
     * @return TTypeEtabQuery The current query, for fluid interface
     */
    public function prune($tTypeEtab = null)
    {
        if ($tTypeEtab) {
            $this->addUsingAlias(TTypeEtabPeer::ID_TYPE_ETAB, $tTypeEtab->getIdTypeEtab(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
