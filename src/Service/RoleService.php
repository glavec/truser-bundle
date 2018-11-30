<?php

namespace Glavec\TruserBundle\Service;


use Doctrine\ORM\EntityManager;
use Glavec\TruserBundle\Repository\RoleRepository;

class RoleService {
	/**
	 * @var EntityManager
	 */
	private $entityManager;
	
	public function __construct(EntityManager $entityManager) {
		$this->entityManager = $entityManager;
	}
	
	public function getRoles() {
		$roles = $this->entityManager->getRepository('GlavecTruserBundle:Role')->findAll();
		$return =  array();
		
		foreach ($roles as $role) {
			$return[] = array(
				"name" => $role->getName()
			);
		}
		
		return $return;
	}
	
}