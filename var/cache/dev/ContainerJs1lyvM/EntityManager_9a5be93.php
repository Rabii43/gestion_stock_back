<?php

namespace ContainerJs1lyvM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99272 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc5412 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc20d7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getConnection', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getMetadataFactory', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getExpressionBuilder', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'beginTransaction', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getCache', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'transactional', array('func' => $func), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'commit', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->commit();
    }

    public function rollback()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'rollback', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'createQuery', array('dql' => $dql), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'createQueryBuilder', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'flush', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'clear', array('entityName' => $entityName), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->clear($entityName);
    }

    public function close()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'close', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->close();
    }

    public function persist($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'persist', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'remove', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'refresh', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'detach', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'merge', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'contains', array('entity' => $entity), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getEventManager', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getConfiguration', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'isOpen', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getUnitOfWork', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getProxyFactory', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'getFilters', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'isFiltersStateClean', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'hasFilters', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return $this->valueHolder99272->hasFilters();
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

        $instance->initializerc5412 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99272) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99272 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99272->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__get', ['name' => $name], $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        if (isset(self::$publicPropertiesc20d7[$name])) {
            return $this->valueHolder99272->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99272;

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

        $targetObject = $this->valueHolder99272;
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
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99272;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99272;
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
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__isset', array('name' => $name), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99272;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99272;
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
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__unset', array('name' => $name), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99272;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99272;
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
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__clone', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        $this->valueHolder99272 = clone $this->valueHolder99272;
    }

    public function __sleep()
    {
        $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, '__sleep', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;

        return array('valueHolder99272');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5412 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5412;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc5412 && ($this->initializerc5412->__invoke($valueHolder99272, $this, 'initializeProxy', array(), $this->initializerc5412) || 1) && $this->valueHolder99272 = $valueHolder99272;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99272;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99272;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
