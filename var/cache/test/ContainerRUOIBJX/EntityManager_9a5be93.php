<?php

namespace ContainerRUOIBJX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderda6ac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03793 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23af6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getConnection', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getMetadataFactory', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getExpressionBuilder', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'beginTransaction', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getCache', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'transactional', array('func' => $func), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'commit', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->commit();
    }

    public function rollback()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'rollback', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getClassMetadata', array('className' => $className), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'createQuery', array('dql' => $dql), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'createNamedQuery', array('name' => $name), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'createQueryBuilder', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'flush', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'clear', array('entityName' => $entityName), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->clear($entityName);
    }

    public function close()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'close', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->close();
    }

    public function persist($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'persist', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'remove', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'refresh', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'detach', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'merge', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'contains', array('entity' => $entity), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getEventManager', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getConfiguration', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'isOpen', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getUnitOfWork', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getProxyFactory', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'initializeObject', array('obj' => $obj), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'getFilters', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'isFiltersStateClean', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'hasFilters', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return $this->valueHolderda6ac->hasFilters();
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

        $instance->initializer03793 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderda6ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderda6ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderda6ac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__get', ['name' => $name], $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        if (isset(self::$publicProperties23af6[$name])) {
            return $this->valueHolderda6ac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ac;

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

        $targetObject = $this->valueHolderda6ac;
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
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderda6ac;
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
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__isset', array('name' => $name), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderda6ac;
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
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__unset', array('name' => $name), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda6ac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderda6ac;
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
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__clone', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        $this->valueHolderda6ac = clone $this->valueHolderda6ac;
    }

    public function __sleep()
    {
        $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, '__sleep', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;

        return array('valueHolderda6ac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03793 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03793;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03793 && ($this->initializer03793->__invoke($valueHolderda6ac, $this, 'initializeProxy', array(), $this->initializer03793) || 1) && $this->valueHolderda6ac = $valueHolderda6ac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda6ac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda6ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
