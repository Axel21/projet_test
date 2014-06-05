<?php

namespace Proxies\__CG__\Vae\BaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formations extends \Vae\BaseBundle\Entity\Formations implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'slug', 'slugEn', 'nom', 'nomEn', 'description', 'descriptionEn', 'debut', 'fin', 'prix', 'maxInscrit', 'rubriques');
        }

        return array('__isInitialized__', 'id', 'slug', 'slugEn', 'nom', 'nomEn', 'description', 'descriptionEn', 'debut', 'fin', 'prix', 'maxInscrit', 'rubriques');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formations $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
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
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugEn($slugEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugEn', array($slugEn));

        return parent::setSlugEn($slugEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugEn', array());

        return parent::getSlugEn();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEn($nomEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEn', array($nomEn));

        return parent::setNomEn($nomEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEn', array());

        return parent::getNomEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEn($descriptionEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEn', array($descriptionEn));

        return parent::setDescriptionEn($descriptionEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEn', array());

        return parent::getDescriptionEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDebut($debut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebut', array($debut));

        return parent::setDebut($debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebut', array());

        return parent::getDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setFin($fin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFin', array($fin));

        return parent::setFin($fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFin', array());

        return parent::getFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxInscrit($maxInscrit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxInscrit', array($maxInscrit));

        return parent::setMaxInscrit($maxInscrit);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxInscrit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxInscrit', array());

        return parent::getMaxInscrit();
    }

    /**
     * {@inheritDoc}
     */
    public function setRubriques(\Vae\BaseBundle\Entity\Rubriques $rubriques = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRubriques', array($rubriques));

        return parent::setRubriques($rubriques);
    }

    /**
     * {@inheritDoc}
     */
    public function getRubriques()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRubriques', array());

        return parent::getRubriques();
    }

}
