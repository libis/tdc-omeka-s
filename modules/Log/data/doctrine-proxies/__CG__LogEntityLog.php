<?php

namespace DoctrineProxies\__CG__\Log\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Log extends \Log\Entity\Log implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', 'id', 'owner', 'job', 'reference', 'severity', 'message', 'context', 'created'];
        }

        return ['__isInitialized__', 'id', 'owner', 'job', 'reference', 'severity', 'message', 'context', 'created'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Log $proxy) {
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
    public function getId(): int
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
    public function setOwner(\Omeka\Entity\User $owner = NULL): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner(): ?\Omeka\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setJob(\Omeka\Entity\Job $job = NULL): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJob', [$job]);

        return parent::setJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getJob(): ?\Omeka\Entity\Job
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJob', []);

        return parent::getJob();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeverity($severity): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeverity', [$severity]);

        return parent::setSeverity($severity);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeverity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeverity', []);

        return parent::getSeverity();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setContext(array $context): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContext', [$context]);

        return parent::setContext($context);
    }

    /**
     * {@inheritDoc}
     */
    public function getContext(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContext', []);

        return parent::getContext();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $eventContext): \Omeka\Entity\AbstractEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$eventContext]);

        return parent::prePersist($eventContext);
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
