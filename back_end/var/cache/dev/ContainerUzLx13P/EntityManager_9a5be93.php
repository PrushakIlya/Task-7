<?php

namespace ContainerUzLx13P;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8b599 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer52239 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c347 = [
        
    ];

    public function getConnection()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getConnection', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getMetadataFactory', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getExpressionBuilder', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'beginTransaction', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getCache', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getCache();
    }

    public function transactional($func)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'transactional', array('func' => $func), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'wrapInTransaction', array('func' => $func), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'commit', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->commit();
    }

    public function rollback()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'rollback', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getClassMetadata', array('className' => $className), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'createQuery', array('dql' => $dql), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'createNamedQuery', array('name' => $name), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'createQueryBuilder', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'flush', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'clear', array('entityName' => $entityName), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->clear($entityName);
    }

    public function close()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'close', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->close();
    }

    public function persist($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'persist', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'remove', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'refresh', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'detach', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'merge', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getRepository', array('entityName' => $entityName), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'contains', array('entity' => $entity), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getEventManager', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getConfiguration', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'isOpen', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getUnitOfWork', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getProxyFactory', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'initializeObject', array('obj' => $obj), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'getFilters', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'isFiltersStateClean', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'hasFilters', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return $this->valueHolder8b599->hasFilters();
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

        $instance->initializer52239 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8b599) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b599 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b599->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__get', ['name' => $name], $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        if (isset(self::$publicProperties9c347[$name])) {
            return $this->valueHolder8b599->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b599;

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

        $targetObject = $this->valueHolder8b599;
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
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b599;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8b599;
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
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__isset', array('name' => $name), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b599;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8b599;
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
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__unset', array('name' => $name), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b599;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8b599;
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
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__clone', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        $this->valueHolder8b599 = clone $this->valueHolder8b599;
    }

    public function __sleep()
    {
        $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, '__sleep', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;

        return array('valueHolder8b599');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52239 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52239;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer52239 && ($this->initializer52239->__invoke($valueHolder8b599, $this, 'initializeProxy', array(), $this->initializer52239) || 1) && $this->valueHolder8b599 = $valueHolder8b599;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b599;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8b599;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
