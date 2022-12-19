<?php
namespace Course\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function createEntityManager() : EntityManager
    {
        // Create a simple "default" Doctrine ORM configuration for Attributes
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(__DIR__."/.."),
            isDevMode: true,
        );
        // or if you prefer annotation, YAML or XML
        // $config = ORMSetup::createAnnotationMetadataConfiguration(
        //    paths: array(__DIR__."/src"),
        //    isDevMode: true,
        // );
        // $config = ORMSetup::createXMLMetadataConfiguration(
        //    paths: array(__DIR__."/config/xml"),
        //    isDevMode: true,
        //);
        // $config = ORMSetup::createYAMLMetadataConfiguration(
        //    paths: array(__DIR__."/config/yaml"),
        //    isDevMode: true,
        // );

        // database configuration parameters
        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite',
        ];

        // obtaining the entity manager
        $entityManager = EntityManager::create($conn, $config);

        return $entityManager;
    }
}
