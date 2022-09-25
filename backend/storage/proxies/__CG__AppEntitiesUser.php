<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entities\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entities\\User' . "\0" . 'first_name', '' . "\0" . 'App\\Entities\\User' . "\0" . 'last_name', '' . "\0" . 'App\\Entities\\User' . "\0" . 'email', '' . "\0" . 'App\\Entities\\User' . "\0" . 'photo', '' . "\0" . 'App\\Entities\\User' . "\0" . 'login', '' . "\0" . 'App\\Entities\\User' . "\0" . 'phone_number', '' . "\0" . 'App\\Entities\\User' . "\0" . 'role', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_of_birth', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_start', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_fired', '' . "\0" . 'App\\Entities\\User' . "\0" . 'created_at', '' . "\0" . 'App\\Entities\\User' . "\0" . 'user_create', '' . "\0" . 'App\\Entities\\User' . "\0" . 'update_at', '' . "\0" . 'App\\Entities\\User' . "\0" . 'user_update', '' . "\0" . 'App\\Entities\\User' . "\0" . 'phones', 'password', 'rememberToken'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entities\\User' . "\0" . 'first_name', '' . "\0" . 'App\\Entities\\User' . "\0" . 'last_name', '' . "\0" . 'App\\Entities\\User' . "\0" . 'email', '' . "\0" . 'App\\Entities\\User' . "\0" . 'photo', '' . "\0" . 'App\\Entities\\User' . "\0" . 'login', '' . "\0" . 'App\\Entities\\User' . "\0" . 'phone_number', '' . "\0" . 'App\\Entities\\User' . "\0" . 'role', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_of_birth', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_start', '' . "\0" . 'App\\Entities\\User' . "\0" . 'date_fired', '' . "\0" . 'App\\Entities\\User' . "\0" . 'created_at', '' . "\0" . 'App\\Entities\\User' . "\0" . 'user_create', '' . "\0" . 'App\\Entities\\User' . "\0" . 'update_at', '' . "\0" . 'App\\Entities\\User' . "\0" . 'user_update', '' . "\0" . 'App\\Entities\\User' . "\0" . 'phones', 'password', 'rememberToken'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getAuthIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifierName', []);

        return parent::getAuthIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifier', []);

        return parent::getAuthIdentifier();
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
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthPassword', []);

        return parent::getAuthPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($first_name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$first_name]);

        parent::setFirstName($first_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($last_name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$last_name]);

        parent::setLastName($last_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phone_number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phone_number]);

        parent::setPhoneNumber($phone_number);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfBirth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfBirth', []);

        return parent::getDateOfBirth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfBirth($date_of_birth): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfBirth', [$date_of_birth]);

        parent::setDateOfBirth($date_of_birth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStart', []);

        return parent::getDateStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateStart($date_start): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStart', [$date_start]);

        parent::setDateStart($date_start);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFired', []);

        return parent::getDateFired();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFired($date_fired): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFired', [$date_fired]);

        parent::setDateFired($date_fired);
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

    /**
     * {@inheritDoc}
     */
    public function getPhones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhones', []);

        return parent::getPhones();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhones(\Doctrine\Common\Collections\ArrayCollection $phones): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhones', [$phones]);

        parent::setPhones($phones);
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberToken', []);

        return parent::getRememberToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setRememberToken($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRememberToken', [$value]);

        return parent::setRememberToken($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberTokenName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberTokenName', []);

        return parent::getRememberTokenName();
    }

    /**
     * {@inheritDoc}
     */
    public function getJWTIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJWTIdentifier', []);

        return parent::getJWTIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getJWTCustomClaims()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJWTCustomClaims', []);

        return parent::getJWTCustomClaims();
    }

    /**
     * {@inheritDoc}
     */
    public function can($ability, $arguments = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'can', [$ability, $arguments]);

        return parent::can($ability, $arguments);
    }

}