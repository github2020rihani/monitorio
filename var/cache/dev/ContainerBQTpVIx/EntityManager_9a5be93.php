<?php

namespace ContainerBQTpVIx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa49e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20c2f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0d731 = [
        
    ];

    public function getConnection()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getConnection', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getMetadataFactory', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getExpressionBuilder', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'beginTransaction', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getCache', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'transactional', array('func' => $func), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'commit', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->commit();
    }

    public function rollback()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'rollback', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getClassMetadata', array('className' => $className), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'createQuery', array('dql' => $dql), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'createNamedQuery', array('name' => $name), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'createQueryBuilder', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'flush', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'clear', array('entityName' => $entityName), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->clear($entityName);
    }

    public function close()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'close', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->close();
    }

    public function persist($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'persist', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'remove', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'refresh', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'detach', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'merge', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'contains', array('entity' => $entity), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getEventManager', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getConfiguration', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'isOpen', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getUnitOfWork', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getProxyFactory', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'initializeObject', array('obj' => $obj), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'getFilters', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'isFiltersStateClean', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'hasFilters', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return $this->valueHolderaa49e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer20c2f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa49e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa49e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa49e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__get', ['name' => $name], $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        if (isset(self::$publicProperties0d731[$name])) {
            return $this->valueHolderaa49e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa49e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa49e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__isset', array('name' => $name), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa49e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__unset', array('name' => $name), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa49e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa49e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__clone', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        $this->valueHolderaa49e = clone $this->valueHolderaa49e;
    }

    public function __sleep()
    {
        $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, '__sleep', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;

        return array('valueHolderaa49e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20c2f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20c2f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20c2f && ($this->initializer20c2f->__invoke($valueHolderaa49e, $this, 'initializeProxy', array(), $this->initializer20c2f) || 1) && $this->valueHolderaa49e = $valueHolderaa49e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa49e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa49e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
