<?php

require_once 'propel/util/BasePeer.php';
// The object class -- needed for instanceof checks in this class.
// actual class may be a subclass -- as returned by AppDocumentPeer::getOMClass()
include_once 'classes/model/AppDocument.php';

/**
 * Base static class for performing query and update operations on the 'APP_DOCUMENT' table.
 *
 * 
 *
 * @package    workflow.classes.model.om
 */
abstract class BaseAppDocumentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'APP_DOCUMENT';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.AppDocument';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;


    /** the column name for the APP_DOC_UID field */
    const APP_DOC_UID = 'APP_DOCUMENT.APP_DOC_UID';

    /** the column name for the APP_DOC_FILENAME field */
    const APP_DOC_FILENAME = 'APP_DOCUMENT.APP_DOC_FILENAME';

    /** the column name for the APP_DOC_TITLE field */
    const APP_DOC_TITLE = 'APP_DOCUMENT.APP_DOC_TITLE';

    /** the column name for the APP_DOC_COMMENT field */
    const APP_DOC_COMMENT = 'APP_DOCUMENT.APP_DOC_COMMENT';

    /** the column name for the DOC_VERSION field */
    const DOC_VERSION = 'APP_DOCUMENT.DOC_VERSION';

    /** the column name for the APP_UID field */
    const APP_UID = 'APP_DOCUMENT.APP_UID';

    /** the column name for the DEL_INDEX field */
    const DEL_INDEX = 'APP_DOCUMENT.DEL_INDEX';

    /** the column name for the DOC_UID field */
    const DOC_UID = 'APP_DOCUMENT.DOC_UID';

    /** the column name for the DOC_ID field */
    const DOC_ID = 'APP_DOCUMENT.DOC_ID';

    /** the column name for the USR_UID field */
    const USR_UID = 'APP_DOCUMENT.USR_UID';

    /** the column name for the APP_DOC_TYPE field */
    const APP_DOC_TYPE = 'APP_DOCUMENT.APP_DOC_TYPE';

    /** the column name for the APP_DOC_CREATE_DATE field */
    const APP_DOC_CREATE_DATE = 'APP_DOCUMENT.APP_DOC_CREATE_DATE';

    /** the column name for the APP_DOC_INDEX field */
    const APP_DOC_INDEX = 'APP_DOCUMENT.APP_DOC_INDEX';

    /** the column name for the FOLDER_UID field */
    const FOLDER_UID = 'APP_DOCUMENT.FOLDER_UID';

    /** the column name for the APP_DOC_PLUGIN field */
    const APP_DOC_PLUGIN = 'APP_DOCUMENT.APP_DOC_PLUGIN';

    /** the column name for the APP_DOC_TAGS field */
    const APP_DOC_TAGS = 'APP_DOCUMENT.APP_DOC_TAGS';

    /** the column name for the APP_DOC_STATUS field */
    const APP_DOC_STATUS = 'APP_DOCUMENT.APP_DOC_STATUS';

    /** the column name for the APP_DOC_STATUS_DATE field */
    const APP_DOC_STATUS_DATE = 'APP_DOCUMENT.APP_DOC_STATUS_DATE';

    /** the column name for the APP_DOC_FIELDNAME field */
    const APP_DOC_FIELDNAME = 'APP_DOCUMENT.APP_DOC_FIELDNAME';

    /** the column name for the APP_DOC_DRIVE_DOWNLOAD field */
    const APP_DOC_DRIVE_DOWNLOAD = 'APP_DOCUMENT.APP_DOC_DRIVE_DOWNLOAD';

    /** the column name for the SYNC_WITH_DRIVE field */
    const SYNC_WITH_DRIVE = 'APP_DOCUMENT.SYNC_WITH_DRIVE';

    /** the column name for the SYNC_PERMISSIONS field */
    const SYNC_PERMISSIONS = 'APP_DOCUMENT.SYNC_PERMISSIONS';

    /** The PHP to DB Name Mapping */
    private static $phpNameMap = null;


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    private static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppDocUid', 'AppDocFilename', 'AppDocTitle', 'AppDocComment', 'DocVersion', 'AppUid', 'DelIndex', 'DocUid', 'DocId', 'UsrUid', 'AppDocType', 'AppDocCreateDate', 'AppDocIndex', 'FolderUid', 'AppDocPlugin', 'AppDocTags', 'AppDocStatus', 'AppDocStatusDate', 'AppDocFieldname', 'AppDocDriveDownload', 'SyncWithDrive', 'SyncPermissions', ),
        BasePeer::TYPE_COLNAME => array (AppDocumentPeer::APP_DOC_UID, AppDocumentPeer::APP_DOC_FILENAME, AppDocumentPeer::APP_DOC_TITLE, AppDocumentPeer::APP_DOC_COMMENT, AppDocumentPeer::DOC_VERSION, AppDocumentPeer::APP_UID, AppDocumentPeer::DEL_INDEX, AppDocumentPeer::DOC_UID, AppDocumentPeer::DOC_ID, AppDocumentPeer::USR_UID, AppDocumentPeer::APP_DOC_TYPE, AppDocumentPeer::APP_DOC_CREATE_DATE, AppDocumentPeer::APP_DOC_INDEX, AppDocumentPeer::FOLDER_UID, AppDocumentPeer::APP_DOC_PLUGIN, AppDocumentPeer::APP_DOC_TAGS, AppDocumentPeer::APP_DOC_STATUS, AppDocumentPeer::APP_DOC_STATUS_DATE, AppDocumentPeer::APP_DOC_FIELDNAME, AppDocumentPeer::APP_DOC_DRIVE_DOWNLOAD, AppDocumentPeer::SYNC_WITH_DRIVE, AppDocumentPeer::SYNC_PERMISSIONS, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_DOC_UID', 'APP_DOC_FILENAME', 'APP_DOC_TITLE', 'APP_DOC_COMMENT', 'DOC_VERSION', 'APP_UID', 'DEL_INDEX', 'DOC_UID', 'DOC_ID', 'USR_UID', 'APP_DOC_TYPE', 'APP_DOC_CREATE_DATE', 'APP_DOC_INDEX', 'FOLDER_UID', 'APP_DOC_PLUGIN', 'APP_DOC_TAGS', 'APP_DOC_STATUS', 'APP_DOC_STATUS_DATE', 'APP_DOC_FIELDNAME', 'APP_DOC_DRIVE_DOWNLOAD', 'SYNC_WITH_DRIVE', 'SYNC_PERMISSIONS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    private static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppDocUid' => 0, 'AppDocFilename' => 1, 'AppDocTitle' => 2, 'AppDocComment' => 3, 'DocVersion' => 4, 'AppUid' => 5, 'DelIndex' => 6, 'DocUid' => 7, 'DocId' => 8, 'UsrUid' => 9, 'AppDocType' => 10, 'AppDocCreateDate' => 11, 'AppDocIndex' => 12, 'FolderUid' => 13, 'AppDocPlugin' => 14, 'AppDocTags' => 15, 'AppDocStatus' => 16, 'AppDocStatusDate' => 17, 'AppDocFieldname' => 18, 'AppDocDriveDownload' => 19, 'SyncWithDrive' => 20, 'SyncPermissions' => 21, ),
        BasePeer::TYPE_COLNAME => array (AppDocumentPeer::APP_DOC_UID => 0, AppDocumentPeer::APP_DOC_FILENAME => 1, AppDocumentPeer::APP_DOC_TITLE => 2, AppDocumentPeer::APP_DOC_COMMENT => 3, AppDocumentPeer::DOC_VERSION => 4, AppDocumentPeer::APP_UID => 5, AppDocumentPeer::DEL_INDEX => 6, AppDocumentPeer::DOC_UID => 7, AppDocumentPeer::DOC_ID => 8, AppDocumentPeer::USR_UID => 9, AppDocumentPeer::APP_DOC_TYPE => 10, AppDocumentPeer::APP_DOC_CREATE_DATE => 11, AppDocumentPeer::APP_DOC_INDEX => 12, AppDocumentPeer::FOLDER_UID => 13, AppDocumentPeer::APP_DOC_PLUGIN => 14, AppDocumentPeer::APP_DOC_TAGS => 15, AppDocumentPeer::APP_DOC_STATUS => 16, AppDocumentPeer::APP_DOC_STATUS_DATE => 17, AppDocumentPeer::APP_DOC_FIELDNAME => 18, AppDocumentPeer::APP_DOC_DRIVE_DOWNLOAD => 19, AppDocumentPeer::SYNC_WITH_DRIVE => 20, AppDocumentPeer::SYNC_PERMISSIONS => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_DOC_UID' => 0, 'APP_DOC_FILENAME' => 1, 'APP_DOC_TITLE' => 2, 'APP_DOC_COMMENT' => 3, 'DOC_VERSION' => 4, 'APP_UID' => 5, 'DEL_INDEX' => 6, 'DOC_UID' => 7, 'DOC_ID' => 8, 'USR_UID' => 9, 'APP_DOC_TYPE' => 10, 'APP_DOC_CREATE_DATE' => 11, 'APP_DOC_INDEX' => 12, 'FOLDER_UID' => 13, 'APP_DOC_PLUGIN' => 14, 'APP_DOC_TAGS' => 15, 'APP_DOC_STATUS' => 16, 'APP_DOC_STATUS_DATE' => 17, 'APP_DOC_FIELDNAME' => 18, 'APP_DOC_DRIVE_DOWNLOAD' => 19, 'SYNC_WITH_DRIVE' => 20, 'SYNC_PERMISSIONS' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * @return     MapBuilder the map builder for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getMapBuilder()
    {
        include_once 'classes/model/map/AppDocumentMapBuilder.php';
        return BasePeer::getMapBuilder('classes.model.map.AppDocumentMapBuilder');
    }
    /**
     * Gets a map (hash) of PHP names to DB column names.
     *
     * @return     array The PHP to DB name map for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @deprecated Use the getFieldNames() and translateFieldName() methods instead of this.
     */
    public static function getPhpNameMap()
    {
        if (self::$phpNameMap === null) {
            $map = AppDocumentPeer::getTableMap();
            $columns = $map->getColumns();
            $nameMap = array();
            foreach ($columns as $column) {
                $nameMap[$column->getPhpName()] = $column->getColumnName();
            }
            self::$phpNameMap = $nameMap;
        }
        return self::$phpNameMap;
    }
    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants TYPE_PHPNAME,
     *                         TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants TYPE_PHPNAME,
     *                      TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. AppDocumentPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AppDocumentPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      criteria object containing the columns to add.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria)
    {

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_UID);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_FILENAME);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_TITLE);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_COMMENT);

        $criteria->addSelectColumn(AppDocumentPeer::DOC_VERSION);

        $criteria->addSelectColumn(AppDocumentPeer::APP_UID);

        $criteria->addSelectColumn(AppDocumentPeer::DEL_INDEX);

        $criteria->addSelectColumn(AppDocumentPeer::DOC_UID);

        $criteria->addSelectColumn(AppDocumentPeer::DOC_ID);

        $criteria->addSelectColumn(AppDocumentPeer::USR_UID);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_TYPE);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_CREATE_DATE);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_INDEX);

        $criteria->addSelectColumn(AppDocumentPeer::FOLDER_UID);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_PLUGIN);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_TAGS);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_STATUS);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_STATUS_DATE);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_FIELDNAME);

        $criteria->addSelectColumn(AppDocumentPeer::APP_DOC_DRIVE_DOWNLOAD);

        $criteria->addSelectColumn(AppDocumentPeer::SYNC_WITH_DRIVE);

        $criteria->addSelectColumn(AppDocumentPeer::SYNC_PERMISSIONS);

    }

    const COUNT = 'COUNT(APP_DOCUMENT.APP_DOC_UID)';
    const COUNT_DISTINCT = 'COUNT(DISTINCT APP_DOCUMENT.APP_DOC_UID)';

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns (You can also set DISTINCT modifier in Criteria).
     * @param      Connection $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, $con = null)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // clear out anything that might confuse the ORDER BY clause
        $criteria->clearSelectColumns()->clearOrderByColumns();
        if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->addSelectColumn(AppDocumentPeer::COUNT_DISTINCT);
        } else {
            $criteria->addSelectColumn(AppDocumentPeer::COUNT);
        }

        // just in case we're grouping: add those columns to the select statement
        foreach ($criteria->getGroupByColumns() as $column) {
            $criteria->addSelectColumn($column);
        }

        $rs = AppDocumentPeer::doSelectRS($criteria, $con);
        if ($rs->next()) {
            return $rs->getInt(1);
        } else {
            // no rows returned; we infer that means 0 matches.
            return 0;
        }
    }
    /**
     * Method to select one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      Connection $con
     * @return     AppDocument
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AppDocumentPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }
        return null;
    }
    /**
     * Method to do selects.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, $con = null)
    {
        return AppDocumentPeer::populateObjects(AppDocumentPeer::doSelectRS($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect()
     * method to get a ResultSet.
     *
     * Use this method directly if you want to just get the resultset
     * (instead of an array of objects).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @return     ResultSet The resultset object with numerically-indexed fields.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if (!$criteria->getSelectColumns()) {
            $criteria = clone $criteria;
            AppDocumentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a Creole ResultSet, set to return
        // rows indexed numerically.
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function populateObjects(ResultSet $rs)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = AppDocumentPeer::getOMClass();
        $cls = Propel::import($cls);
        // populate the object(s)
        while ($rs->next()) {

            $obj = new $cls();
            $obj->hydrate($rs);
            $results[] = $obj;

        }
        return $results;
    }
    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * The class that the Peer will make instances of.
     *
     * This uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @return     string path.to.ClassName
     */
    public static function getOMClass()
    {
        return AppDocumentPeer::CLASS_DEFAULT;
    }

    /**
     * Method perform an INSERT on the database, given a AppDocument or Criteria object.
     *
     * @param      mixed $values Criteria or AppDocument object containing data that is used to create the INSERT statement.
     * @param      Connection $con the connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from AppDocument object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->begin();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }

        return $pk;
    }

    /**
     * Method perform an UPDATE on the database, given a AppDocument or Criteria object.
     *
     * @param      mixed $values Criteria or AppDocument object containing data create the UPDATE statement.
     * @param      Connection $con The connection to use (specify Connection exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AppDocumentPeer::APP_DOC_UID);
            $selectCriteria->add(AppDocumentPeer::APP_DOC_UID, $criteria->remove(AppDocumentPeer::APP_DOC_UID), $comparison);

            $comparison = $criteria->getComparison(AppDocumentPeer::DOC_VERSION);
            $selectCriteria->add(AppDocumentPeer::DOC_VERSION, $criteria->remove(AppDocumentPeer::DOC_VERSION), $comparison);

        } else {
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the APP_DOCUMENT table.
     *
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll($con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();
            $affectedRows += BasePeer::doDeleteAll(AppDocumentPeer::TABLE_NAME, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Method perform a DELETE on the database, given a AppDocument or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or AppDocument object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      Connection $con the connection to use
     * @return     int  The number of affected rows (if supported by underlying database driver).
     *             This includes CASCADE-related rows
     *              if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
    */
    public static function doDelete($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } elseif ($values instanceof AppDocument) {

            $criteria = $values->buildPkeyCriteria();
        } else {
            // it must be the primary key
            $criteria = new Criteria(self::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey
            // values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            $vals = array();
            foreach ($values as $value) {

                $vals[0][] = $value[0];
                $vals[1][] = $value[1];
            }

            $criteria->add(AppDocumentPeer::APP_DOC_UID, $vals[0], Criteria::IN);
            $criteria->add(AppDocumentPeer::DOC_VERSION, $vals[1], Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given AppDocument object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      AppDocument $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate(AppDocument $obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AppDocumentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AppDocumentPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->containsColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_UID))
            $columns[AppDocumentPeer::APP_DOC_UID] = $obj->getAppDocUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_UID))
            $columns[AppDocumentPeer::APP_UID] = $obj->getAppUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::DEL_INDEX))
            $columns[AppDocumentPeer::DEL_INDEX] = $obj->getDelIndex();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::DOC_UID))
            $columns[AppDocumentPeer::DOC_UID] = $obj->getDocUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::USR_UID))
            $columns[AppDocumentPeer::USR_UID] = $obj->getUsrUid();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_TYPE))
            $columns[AppDocumentPeer::APP_DOC_TYPE] = $obj->getAppDocType();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_CREATE_DATE))
            $columns[AppDocumentPeer::APP_DOC_CREATE_DATE] = $obj->getAppDocCreateDate();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::APP_DOC_STATUS))
            $columns[AppDocumentPeer::APP_DOC_STATUS] = $obj->getAppDocStatus();

        if ($obj->isNew() || $obj->isColumnModified(AppDocumentPeer::SYNC_WITH_DRIVE))
            $columns[AppDocumentPeer::SYNC_WITH_DRIVE] = $obj->getSyncWithDrive();

        }

        return BasePeer::doValidate(AppDocumentPeer::DATABASE_NAME, AppDocumentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param string $app_doc_uid
       * @param int $doc_version
        * @param      Connection $con
     * @return     AppDocument
     */
    public static function retrieveByPK($app_doc_uid, $doc_version, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $criteria = new Criteria();
        $criteria->add(AppDocumentPeer::APP_DOC_UID, $app_doc_uid);
        $criteria->add(AppDocumentPeer::DOC_VERSION, $doc_version);
        $v = AppDocumentPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
}


// static code to register the map builder for this Peer with the main Propel class
if (Propel::isInit()) {
    // the MapBuilder classes register themselves with Propel during initialization
    // so we need to load them here.
    try {
        BaseAppDocumentPeer::getMapBuilder();
    } catch (Exception $e) {
        Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
    }
} else {
    // even if Propel is not yet initialized, the map builder class can be registered
    // now and then it will be loaded when Propel initializes.
    require_once 'classes/model/map/AppDocumentMapBuilder.php';
    Propel::registerMapBuilder('classes.model.map.AppDocumentMapBuilder');
}

