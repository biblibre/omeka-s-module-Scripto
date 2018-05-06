<?php

namespace DoctrineProxies\__CG__\Scripto\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScriptoProject extends \Scripto\Entity\ScriptoProject implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'id', 'owner', 'itemSet', 'property', 'lang', 'importTarget', 'title', 'description', 'guidelines', 'created', 'synced', 'imported', 'reviewers'];
        }

        return ['__isInitialized__', 'id', 'owner', 'itemSet', 'property', 'lang', 'importTarget', 'title', 'description', 'guidelines', 'created', 'synced', 'imported', 'reviewers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScriptoProject $proxy) {
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
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Omeka\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setItemSet(\Omeka\Entity\ItemSet $itemSet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItemSet', [$itemSet]);

        return parent::setItemSet($itemSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemSet', []);

        return parent::getItemSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperty(\Omeka\Entity\Property $property = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperty', [$property]);

        return parent::setProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperty', []);

        return parent::getProperty();
    }

    /**
     * {@inheritDoc}
     */
    public function setLang($lang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLang', [$lang]);

        return parent::setLang($lang);
    }

    /**
     * {@inheritDoc}
     */
    public function getLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLang', []);

        return parent::getLang();
    }

    /**
     * {@inheritDoc}
     */
    public function setImportTarget($importTarget)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImportTarget', [$importTarget]);

        return parent::setImportTarget($importTarget);
    }

    /**
     * {@inheritDoc}
     */
    public function getImportTarget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImportTarget', []);

        return parent::getImportTarget();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuidelines($guidelines)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuidelines', [$guidelines]);

        return parent::setGuidelines($guidelines);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuidelines()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuidelines', []);

        return parent::getGuidelines();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $dateTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$dateTime]);

        return parent::setCreated($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setSynced(\DateTime $dateTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynced', [$dateTime]);

        return parent::setSynced($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSynced()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynced', []);

        return parent::getSynced();
    }

    /**
     * {@inheritDoc}
     */
    public function setImported(\DateTime $dateTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImported', [$dateTime]);

        return parent::setImported($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getImported()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImported', []);

        return parent::getImported();
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewers', []);

        return parent::getReviewers();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $eventArgs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$eventArgs]);

        return parent::prePersist($eventArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
