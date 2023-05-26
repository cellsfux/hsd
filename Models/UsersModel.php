<?php 

namespace App\Models;

class UsersModel extends Model{

    protected $_id;
    protected $name;
    protected $last_name;
    protected $genge;
    protected $mobile;
    protected $email;
    protected $password;
    protected $role;
    protected $created_at;
    protected $update_at;

    public function __construct()
    {

        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $virtual_Table= strtolower(str_replace('Model', '', $class));
        $this->table = 'hesed_'.$virtual_Table;
    }

    


    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     */
    public function set_id($_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of genge
     */
    public function getGenge()
    {
        return $this->genge;
    }

    /**
     * Set the value of genge
     */
    public function setGenge($genge): self
    {
        $this->genge = $genge;

        return $this;
    }

    /**
     * Get the value of mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set the value of mobile
     */
    public function setMobile($mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of update_at
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Set the value of update_at
     */
    public function setUpdateAt($update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
}