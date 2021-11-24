<?php
require_once __DIR__ . '/../entity/Usuario.php';
require_once __DIR__ . '/../database/QueryBuilder.php';
require_once __DIR__ . '/../security/IPasswordGenerator.php';
class UsuarioRepository extends QueryBuilder

{
    /**
     * @var IPasswordGenerator
     */
    private $passwordGenerator;

    public function __construct(IPasswordGenerator $passwordGenerator){
        $this->passwordGenerator = $passwordGenerator;
        parent::__construct('users', 'Usuario');
    }
    public function findUserNameAndPassword($username, $password): ?Usuario {
        $sql = "SELECT * FROM $this->table WHERE username = :username";
        $parameters = ["username" => $username];
        try {
            $pdoStatement = $this->connection->prepare($sql);
            $pdoStatement->execute($parameters);
            $pdoStatement->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,
            $this->classEntity);
            $result = $pdoStatement->fetch();
            if (empty($result)) {
                throw new NotFoundException("No se ha encontrado ningún usuario con dichas credenciales");
            } else {
                if(!$this->passwordGenerator::passwordVerify($password, $result->getPassword())){
                    echo "lol";
                    throw new NotFoundException("No se ha encontraddo ningún elemento con esas crecenciales");
                          
                }
            }
            return $result;
        } catch (\PDOException $pdoException) {
            throw new QueryException("No se ha podido ejecutar la consulat solicitada: " . $pdoException->getMessage());
        }
        return null;
    }
    public function save(Entity $entity)
    {
        try {
            $parameters = $entity->toArray();
            $parameters['password'] = $this->passwordGenerator::encrypt($parameters['password']);
            $sql = sprintf(
                'INSERT INTO %s (%s) values (%s)',
                $this->table,
                implode(', ', array_keys($parameters)),
                ':' .  implode(', :', array_keys($parameters))
            );
            $statement = $this->connection->prepare($sql);
            $statement->execute($parameters);
        } catch (\PDOException $pdoException) {
            throw new QueryException("Error al insertar en la base de datos: ".
        $pdoException->getMessage());
        }
    }
}