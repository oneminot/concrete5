<?php

namespace DoctrineProxies\__CG__\Concrete\Core\File;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class File extends \Concrete\Core\File\File implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'fID', 'fDateAdded', 'fPassword', 'versions', 'fOverrideSetPermissions', 'ocID', 'uID', 'storageLocation');
        }

        return array('__isInitialized__', 'fID', 'fDateAdded', 'fPassword', 'versions', 'fOverrideSetPermissions', 'ocID', 'uID', 'storageLocation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (File $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __call($nm, $a)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($nm, $a));

        return parent::__call($nm, $a);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', array());

        return parent::getPermissionResponseClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', array());

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', array());

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', array());

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageLocationID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageLocationID', array());

        return parent::getStorageLocationID();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileStorageLocationObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileStorageLocationObject', array());

        return parent::getFileStorageLocationObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileVersions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileVersions', array());

        return parent::getFileVersions();
    }

    /**
     * {@inheritDoc}
     */
    public function reindex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'reindex', array());

        return parent::reindex();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileStorageLocation(\Concrete\Core\File\StorageLocation\StorageLocation $newLocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileStorageLocation', array($newLocation));

        return parent::setFileStorageLocation($newLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($pw)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($pw));

        return parent::setPassword($pw);
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalPage($ocID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalPage', array($ocID));

        return parent::setOriginalPage($ocID);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalPageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalPageObject', array());

        return parent::getOriginalPageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function overrideFileSetPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'overrideFileSetPermissions', array());

        return parent::overrideFileSetPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function resetPermissions($fOverrideSetPermissions = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetPermissions', array($fOverrideSetPermissions));

        return parent::resetPermissions($fOverrideSetPermissions);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserID', array());

        return parent::getUserID();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserID($uID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserID', array($uID));

        return parent::setUserID($uID);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileSets', array());

        return parent::getFileSets();
    }

    /**
     * {@inheritDoc}
     */
    public function isStarred($u = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStarred', array($u));

        return parent::isStarred($u);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', array());

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionToModify($forceCreateNew = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionToModify', array($forceCreateNew));

        return parent::getVersionToModify($forceCreateNew);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileID', array());

        return parent::getFileID();
    }

    /**
     * {@inheritDoc}
     */
    public function duplicate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'duplicate', array());

        return parent::duplicate();
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovedVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovedVersion', array());

        return parent::getApprovedVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function inFileSet($fs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'inFileSet', array($fs));

        return parent::inFileSet($fs);
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array());

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecentVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecentVersion', array());

        return parent::getRecentVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion($fvID = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', array($fvID));

        return parent::getVersion($fvID);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionList', array());

        return parent::getVersionList();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalDownloads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalDownloads', array());

        return parent::getTotalDownloads();
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadStatistics($limit = 20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadStatistics', array($limit));

        return parent::getDownloadStatistics($limit);
    }

    /**
     * {@inheritDoc}
     */
    public function trackDownload($rcID = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'trackDownload', array($rcID));

        return parent::trackDownload($rcID);
    }

    /**
     * {@inheritDoc}
     */
    public function isError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isError', array());

        return parent::isError();
    }

}
