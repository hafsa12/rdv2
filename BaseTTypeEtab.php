<?php


/**
 * Base class that represents a row from the 'T_TYPE_ETAB' table.
 *
 *
 *
 * @package    propel.generator.RDV.om
 */
abstract class BaseTTypeEtab extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TTypeEtabPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TTypeEtabPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_type_etab field.
     * @var        int
     */
    protected $id_type_etab;

    /**
     * The value for the id_organisation field.
     * @var        int
     */
    protected $id_organisation;

    /**
     * The value for the code_libelle field.
     * @var        int
     */
    protected $code_libelle;

    /**
     * The value for the niveau field.
     * @var        string
     */
    protected $niveau;

    /**
     * The value for the code_libelle_etab field.
     * @var        int
     */
    protected $code_libelle_etab;

    /**
     * The value for the $detail_prestation field.
     * @var        int
     */
    protected $detail_prestation;

    /**
     * @var        TTraduction
     */
    protected $aTTraductionRelatedByCodeLibelle;

    /**
     * @var        TTraduction
     */
    protected $aTTraductionRelatedByCodeLibelleEtab;

    /**
     * @var        PropelObjectCollection|TEtablissement[] Collection to store aggregation of TEtablissement objects.
     */
    protected $collTEtablissements;
    protected $collTEtablissementsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tEtablissementsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->detail_prestation = '0';
    }

    /**
     * Initializes internal state of BaseTOrganisation object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_type_etab] column value.
     *
     * @return int
     */
    public function getIdTypeEtab()
    {
        return $this->id_type_etab;
    }

    /**
     * Get the [id_organisation] column value.
     *
     * @return int
     */
    public function getIdOrganisation()
    {
        return $this->id_organisation;
    }

    /**
     * Get the [code_libelle] column value.
     *
     * @return int
     */
    public function getCodeLibelle()
    {
        return $this->code_libelle;
    }

    /**
     * Get the [niveau] column value.
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Get the [code_libelle_etab] column value.
     *
     * @return int
     */
    public function getCodeLibelleEtab()
    {
        return $this->code_libelle_etab;
    }

    /**
     * Get the [$this->detail_prestation] column value.
     *
     * @return string
     */
    public function getDetailPrestation()
    {
        return $this->detail_prestation;
    }

    /**
     * Set the value of [id_type_etab] column.
     *
     * @param int $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setIdTypeEtab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_etab !== $v) {
            $this->id_type_etab = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::ID_TYPE_ETAB;
        }


        return $this;
    } // setIdTypeEtab()

    /**
     * Set the value of [id_organisation] column.
     *
     * @param int $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setIdOrganisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisation !== $v) {
            $this->id_organisation = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::ID_ORGANISATION;
        }


        return $this;
    } // setIdOrganisation()

    /**
     * Set the value of [code_libelle] column.
     *
     * @param int $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setCodeLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_libelle !== $v) {
            $this->code_libelle = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::CODE_LIBELLE;
        }

        if ($this->aTTraductionRelatedByCodeLibelle !== null && $this->aTTraductionRelatedByCodeLibelle->getIdTraduction() !== $v) {
            $this->aTTraductionRelatedByCodeLibelle = null;
        }


        return $this;
    } // setCodeLibelle()

    /**
     * Set the value of [niveau] column.
     *
     * @param string $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setNiveau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->niveau !== $v) {
            $this->niveau = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::NIVEAU;
        }


        return $this;
    } // setNiveau()

    /**
     * Set the value of [code_libelle_etab] column.
     *
     * @param int $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setCodeLibelleEtab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_libelle_etab !== $v) {
            $this->code_libelle_etab = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::CODE_LIBELLE_ETAB;
        }

        if ($this->aTTraductionRelatedByCodeLibelleEtab !== null && $this->aTTraductionRelatedByCodeLibelleEtab->getIdTraduction() !== $v) {
            $this->aTTraductionRelatedByCodeLibelleEtab = null;
        }


        return $this;
    } // setCodeLibelleEtab()

    /**
     * Set the value of [detail_prestation] column.
     *
     * @param string $v new value
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setDetailPrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail_prestation !== $v) {
            $this->detail_prestation = $v;
            $this->modifiedColumns[] = TTypeEtabPeer::DETAIL_PRESTATION;
        }


        return $this;
    } // setRessource()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        if ($this->detail_prestation !== '0') {
            return false;
        }
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_type_etab = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_organisation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->code_libelle = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->niveau = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->code_libelle_etab = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->detail_prestation = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 6; // 5 = TTypeEtabPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TTypeEtab object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aTTraductionRelatedByCodeLibelle !== null && $this->code_libelle !== $this->aTTraductionRelatedByCodeLibelle->getIdTraduction()) {
            $this->aTTraductionRelatedByCodeLibelle = null;
        }
        if ($this->aTTraductionRelatedByCodeLibelleEtab !== null && $this->code_libelle_etab !== $this->aTTraductionRelatedByCodeLibelleEtab->getIdTraduction()) {
            $this->aTTraductionRelatedByCodeLibelleEtab = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TTypeEtabPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTTraductionRelatedByCodeLibelle = null;
            $this->aTTraductionRelatedByCodeLibelleEtab = null;
            $this->collTEtablissements = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TTypeEtabQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TTypeEtabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TTypeEtabPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTTraductionRelatedByCodeLibelle !== null) {
                if ($this->aTTraductionRelatedByCodeLibelle->isModified() || $this->aTTraductionRelatedByCodeLibelle->isNew()) {
                    $affectedRows += $this->aTTraductionRelatedByCodeLibelle->save($con);
                }
                $this->setTTraductionRelatedByCodeLibelle($this->aTTraductionRelatedByCodeLibelle);
            }

            if ($this->aTTraductionRelatedByCodeLibelleEtab !== null) {
                if ($this->aTTraductionRelatedByCodeLibelleEtab->isModified() || $this->aTTraductionRelatedByCodeLibelleEtab->isNew()) {
                    $affectedRows += $this->aTTraductionRelatedByCodeLibelleEtab->save($con);
                }
                $this->setTTraductionRelatedByCodeLibelleEtab($this->aTTraductionRelatedByCodeLibelleEtab);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->tEtablissementsScheduledForDeletion !== null) {
                if (!$this->tEtablissementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->tEtablissementsScheduledForDeletion as $tEtablissement) {
                        // need to save related object because we set the relation to null
                        $tEtablissement->save($con);
                    }
                    $this->tEtablissementsScheduledForDeletion = null;
                }
            }

            if ($this->collTEtablissements !== null) {
                foreach ($this->collTEtablissements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = TTypeEtabPeer::ID_TYPE_ETAB;
        if (null !== $this->id_type_etab) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TTypeEtabPeer::ID_TYPE_ETAB . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TTypeEtabPeer::ID_TYPE_ETAB)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TYPE_ETAB`';
        }
        if ($this->isColumnModified(TTypeEtabPeer::ID_ORGANISATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISATION`';
        }
        if ($this->isColumnModified(TTypeEtabPeer::CODE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_LIBELLE`';
        }
        if ($this->isColumnModified(TTypeEtabPeer::NIVEAU)) {
            $modifiedColumns[':p' . $index++]  = '`NIVEAU`';
        }
        if ($this->isColumnModified(TTypeEtabPeer::CODE_LIBELLE_ETAB)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_LIBELLE_ETAB`';
        }
        if ($this->isColumnModified(TTypeEtabPeer::DETAIL_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`DETAIL_PRESTATION`';
        }

        $sql = sprintf(
            'INSERT INTO `T_TYPE_ETAB` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_TYPE_ETAB`':
                        $stmt->bindValue($identifier, $this->id_type_etab, PDO::PARAM_INT);
                        break;
                    case '`ID_ORGANISATION`':
                        $stmt->bindValue($identifier, $this->id_organisation, PDO::PARAM_INT);
                        break;
                    case '`CODE_LIBELLE`':
                        $stmt->bindValue($identifier, $this->code_libelle, PDO::PARAM_INT);
                        break;
                    case '`NIVEAU`':
                        $stmt->bindValue($identifier, $this->niveau, PDO::PARAM_STR);
                        break;
                    case '`CODE_LIBELLE_ETAB`':
                        $stmt->bindValue($identifier, $this->code_libelle_etab, PDO::PARAM_INT);
                        break;
                    case '`DETAIL_PRESTATION`':
                        $stmt->bindValue($identifier, $this->detail_prestation, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdTypeEtab($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTTraductionRelatedByCodeLibelle !== null) {
                if (!$this->aTTraductionRelatedByCodeLibelle->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTTraductionRelatedByCodeLibelle->getValidationFailures());
                }
            }

            if ($this->aTTraductionRelatedByCodeLibelleEtab !== null) {
                if (!$this->aTTraductionRelatedByCodeLibelleEtab->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTTraductionRelatedByCodeLibelleEtab->getValidationFailures());
                }
            }


            if (($retval = TTypeEtabPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTEtablissements !== null) {
                    foreach ($this->collTEtablissements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);

        if ($this->isColumnModified(TTypeEtabPeer::ID_TYPE_ETAB)) $criteria->add(TTypeEtabPeer::ID_TYPE_ETAB, $this->id_type_etab);
        if ($this->isColumnModified(TTypeEtabPeer::ID_ORGANISATION)) $criteria->add(TTypeEtabPeer::ID_ORGANISATION, $this->id_organisation);
        if ($this->isColumnModified(TTypeEtabPeer::CODE_LIBELLE)) $criteria->add(TTypeEtabPeer::CODE_LIBELLE, $this->code_libelle);
        if ($this->isColumnModified(TTypeEtabPeer::NIVEAU)) $criteria->add(TTypeEtabPeer::NIVEAU, $this->niveau);
        if ($this->isColumnModified(TTypeEtabPeer::CODE_LIBELLE_ETAB)) $criteria->add(TTypeEtabPeer::CODE_LIBELLE_ETAB, $this->code_libelle_etab);
        if ($this->isColumnModified(TTypeEtabPeer::DETAIL_PRESTATION)) $criteria->add(TTypeEtabPeer::DETAIL_PRESTATION, $this->detail_prestation);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TTypeEtabPeer::DATABASE_NAME);
        $criteria->add(TTypeEtabPeer::ID_TYPE_ETAB, $this->id_type_etab);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTypeEtab();
    }

    /**
     * Generic method to set the primary key (id_type_etab column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTypeEtab($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTypeEtab();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TTypeEtab (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdOrganisation($this->getIdOrganisation());
        $copyObj->setCodeLibelle($this->getCodeLibelle());
        $copyObj->setNiveau($this->getNiveau());
        $copyObj->setCodeLibelleEtab($this->getCodeLibelleEtab());
        $copyObj->setDetailPrestation($this->getDetailPrestation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTEtablissements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTEtablissement($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTypeEtab(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return TTypeEtab Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return TTypeEtabPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TTypeEtabPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a TTraduction object.
     *
     * @param             TTraduction $v
     * @return TTypeEtab The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTTraductionRelatedByCodeLibelle(TTraduction $v = null)
    {
        if ($v === null) {
            $this->setCodeLibelle(NULL);
        } else {
            $this->setCodeLibelle($v->getIdTraduction());
        }

        $this->aTTraductionRelatedByCodeLibelle = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TTraduction object, it will not be re-added.
        if ($v !== null) {
            $v->addTTypeEtabRelatedByCodeLibelle($this);
        }


        return $this;
    }


    /**
     * Get the associated TTraduction object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TTraduction The associated TTraduction object.
     * @throws PropelException
     */
    public function getTTraductionRelatedByCodeLibelle(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTTraductionRelatedByCodeLibelle === null && ($this->code_libelle !== null) && $doQuery) {
            $this->aTTraductionRelatedByCodeLibelle = TTraductionQuery::create()->findPk($this->code_libelle, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTTraductionRelatedByCodeLibelle->addTTypeEtabsRelatedByCodeLibelle($this);
             */
        }

        return $this->aTTraductionRelatedByCodeLibelle;
    }

    /**
     * Declares an association between this object and a TTraduction object.
     *
     * @param             TTraduction $v
     * @return TTypeEtab The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTTraductionRelatedByCodeLibelleEtab(TTraduction $v = null)
    {
        if ($v === null) {
            $this->setCodeLibelleEtab(NULL);
        } else {
            $this->setCodeLibelleEtab($v->getIdTraduction());
        }

        $this->aTTraductionRelatedByCodeLibelleEtab = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TTraduction object, it will not be re-added.
        if ($v !== null) {
            $v->addTTypeEtabRelatedByCodeLibelleEtab($this);
        }


        return $this;
    }


    /**
     * Get the associated TTraduction object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TTraduction The associated TTraduction object.
     * @throws PropelException
     */
    public function getTTraductionRelatedByCodeLibelleEtab(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTTraductionRelatedByCodeLibelleEtab === null && ($this->code_libelle_etab !== null) && $doQuery) {
            $this->aTTraductionRelatedByCodeLibelleEtab = TTraductionQuery::create()->findPk($this->code_libelle_etab, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTTraductionRelatedByCodeLibelleEtab->addTTypeEtabsRelatedByCodeLibelleEtab($this);
             */
        }

        return $this->aTTraductionRelatedByCodeLibelleEtab;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('TEtablissement' == $relationName) {
            $this->initTEtablissements();
        }
    }

    /**
     * Clears out the collTEtablissements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return TTypeEtab The current object (for fluent API support)
     * @see        addTEtablissements()
     */
    public function clearTEtablissements()
    {
        $this->collTEtablissements = null; // important to set this to null since that means it is uninitialized
        $this->collTEtablissementsPartial = null;

        return $this;
    }

    /**
     * reset is the collTEtablissements collection loaded partially
     *
     * @return void
     */
    public function resetPartialTEtablissements($v = true)
    {
        $this->collTEtablissementsPartial = $v;
    }

    /**
     * Initializes the collTEtablissements collection.
     *
     * By default this just sets the collTEtablissements collection to an empty array (like clearcollTEtablissements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTEtablissements($overrideExisting = true)
    {
        if (null !== $this->collTEtablissements && !$overrideExisting) {
            return;
        }
        $this->collTEtablissements = new PropelObjectCollection();
        $this->collTEtablissements->setModel('TEtablissement');
    }

    /**
     * Gets an array of TEtablissement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this TTypeEtab is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     * @throws PropelException
     */
    public function getTEtablissements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTEtablissementsPartial && !$this->isNew();
        if (null === $this->collTEtablissements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTEtablissements) {
                // return empty collection
                $this->initTEtablissements();
            } else {
                $collTEtablissements = TEtablissementQuery::create(null, $criteria)
                    ->filterByTTypeEtab($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTEtablissementsPartial && count($collTEtablissements)) {
                      $this->initTEtablissements(false);

                      foreach($collTEtablissements as $obj) {
                        if (false == $this->collTEtablissements->contains($obj)) {
                          $this->collTEtablissements->append($obj);
                        }
                      }

                      $this->collTEtablissementsPartial = true;
                    }

                    $collTEtablissements->getInternalIterator()->rewind();
                    return $collTEtablissements;
                }

                if($partial && $this->collTEtablissements) {
                    foreach($this->collTEtablissements as $obj) {
                        if($obj->isNew()) {
                            $collTEtablissements[] = $obj;
                        }
                    }
                }

                $this->collTEtablissements = $collTEtablissements;
                $this->collTEtablissementsPartial = false;
            }
        }

        return $this->collTEtablissements;
    }

    /**
     * Sets a collection of TEtablissement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tEtablissements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function setTEtablissements(PropelCollection $tEtablissements, PropelPDO $con = null)
    {
        $tEtablissementsToDelete = $this->getTEtablissements(new Criteria(), $con)->diff($tEtablissements);

        $this->tEtablissementsScheduledForDeletion = unserialize(serialize($tEtablissementsToDelete));

        foreach ($tEtablissementsToDelete as $tEtablissementRemoved) {
            $tEtablissementRemoved->setTTypeEtab(null);
        }

        $this->collTEtablissements = null;
        foreach ($tEtablissements as $tEtablissement) {
            $this->addTEtablissement($tEtablissement);
        }

        $this->collTEtablissements = $tEtablissements;
        $this->collTEtablissementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TEtablissement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TEtablissement objects.
     * @throws PropelException
     */
    public function countTEtablissements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTEtablissementsPartial && !$this->isNew();
        if (null === $this->collTEtablissements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTEtablissements) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTEtablissements());
            }
            $query = TEtablissementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTTypeEtab($this)
                ->count($con);
        }

        return count($this->collTEtablissements);
    }

    /**
     * Method called to associate a TEtablissement object to this object
     * through the TEtablissement foreign key attribute.
     *
     * @param    TEtablissement $l TEtablissement
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function addTEtablissement(TEtablissement $l)
    {
        if ($this->collTEtablissements === null) {
            $this->initTEtablissements();
            $this->collTEtablissementsPartial = true;
        }
        if (!in_array($l, $this->collTEtablissements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTEtablissement($l);
        }

        return $this;
    }

    /**
     * @param	TEtablissement $tEtablissement The tEtablissement object to add.
     */
    protected function doAddTEtablissement($tEtablissement)
    {
        $this->collTEtablissements[]= $tEtablissement;
        $tEtablissement->setTTypeEtab($this);
    }

    /**
     * @param	TEtablissement $tEtablissement The tEtablissement object to remove.
     * @return TTypeEtab The current object (for fluent API support)
     */
    public function removeTEtablissement($tEtablissement)
    {
        if ($this->getTEtablissements()->contains($tEtablissement)) {
            $this->collTEtablissements->remove($this->collTEtablissements->search($tEtablissement));
            if (null === $this->tEtablissementsScheduledForDeletion) {
                $this->tEtablissementsScheduledForDeletion = clone $this->collTEtablissements;
                $this->tEtablissementsScheduledForDeletion->clear();
            }
            $this->tEtablissementsScheduledForDeletion[]= $tEtablissement;
            $tEtablissement->setTTypeEtab(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTTraductionRelatedByCodeAdresseEtablissement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TTraductionRelatedByCodeAdresseEtablissement', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTTraductionRelatedByCodeDenominationEtablissement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TTraductionRelatedByCodeDenominationEtablissement', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTTraductionRelatedByCodeDescriptionEtablissement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TTraductionRelatedByCodeDescriptionEtablissement', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTBlob($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TBlob', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTEntite($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TEntite', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TTypeEtab is new, it will return
     * an empty collection; or if this TTypeEtab has previously
     * been saved, it will retrieve related TEtablissements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TTypeEtab.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TEtablissement[] List of TEtablissement objects
     */
    public function getTEtablissementsJoinTOrganisation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TEtablissementQuery::create(null, $criteria);
        $query->joinWith('TOrganisation', $join_behavior);

        return $this->getTEtablissements($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_type_etab = null;
        $this->id_organisation = null;
        $this->code_libelle = null;
        $this->niveau = null;
        $this->code_libelle_etab = null;
        $this->detail_prestation = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collTEtablissements) {
                foreach ($this->collTEtablissements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aTTraductionRelatedByCodeLibelle instanceof Persistent) {
              $this->aTTraductionRelatedByCodeLibelle->clearAllReferences($deep);
            }
            if ($this->aTTraductionRelatedByCodeLibelleEtab instanceof Persistent) {
              $this->aTTraductionRelatedByCodeLibelleEtab->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTEtablissements instanceof PropelCollection) {
            $this->collTEtablissements->clearIterator();
        }
        $this->collTEtablissements = null;
        $this->aTTraductionRelatedByCodeLibelle = null;
        $this->aTTraductionRelatedByCodeLibelleEtab = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TTypeEtabPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
