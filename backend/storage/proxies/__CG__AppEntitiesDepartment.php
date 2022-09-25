<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Department extends \App\Entities\Department implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'name', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'is_active', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'domain_name', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'users', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'created_at', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'user_create', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'update_at', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'user_update'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'name', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'is_active', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'domain_name', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'users', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'created_at', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'user_create', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'update_at', '' . "\0" . 'App\\Entities\\Department' . "\0" . 'user_update'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Department $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function setId($id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($is_active): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$is_active]);

        parent::setIsActive($is_active);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomainName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomainName', []);

        return parent::getDomainName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomainName($domain_name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomainName', [$domain_name]);

        parent::setDomainName($domain_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsers($users): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsers', [$users]);

        parent::setUsers($users);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($created_at): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserCreate', []);

        return parent::getUserCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserCreate($user_create): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserCreate', [$user_create]);

        parent::setUserCreate($user_create);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateAt', []);

        return parent::getUpdateAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateAt($update_at): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateAt', [$update_at]);

        parent::setUpdateAt($update_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserUpdate', []);

        return parent::getUserUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUpdate($user_update): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUpdate', [$user_update]);

        parent::setUserUpdate($user_update);
    }

}
