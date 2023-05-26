<?php
namespace App\Models;


class  MediaModel extends Model
{
    protected $_id;
    protected $type;
    protected $file_path;
    protected $created_at;
    
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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of file_path
     */
    public function getFilePath()
    {
        return $this->file_path;
    }

    /**
     * Set the value of file_path
     */
    public function setFilePath($file_path): self
    {
        $this->file_path = $file_path;

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
}