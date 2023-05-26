<?php 
namespace App\Models;

class ArticlesModel extends Model{

    protected $_id;
    protected $title;
    protected $contenu;
    protected $slug;
    protected $image;
    protected $url;
    protected $by_create;
    protected $status;
    protected $created_at;
    protected $update_at;
    
    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $virtual_Table= strtolower(str_replace('Model', '', $class));
        $this->table = 'hesed_'.$virtual_Table;
    }

    /**
     * Cette methode permer de creer un nouvel Article.
     * ca recoit en argument le donnees venant du post.
     */
    public function AddArticle($donne){


        $this->title=strip_tags($donne['title']);
        $this->contenu=$donne['contenu'];

        $slug=str_replace(' ', '-', $donne['slug']);
        $this->slug= strtolower(strip_tags($slug));
        $this->image=strtolower(strip_tags($donne['image']));
        $this->url=strip_tags($donne['url']);
        $this->status=strip_tags($donne['status']);
        $this->by_create=strip_tags($donne['by']);  
         $create_id= $this->lastId($this); 

         return  $this->find($create_id);
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
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     */
    public function setContenu($contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     */
    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     */
    public function setUrl($url): self
    {
        $this->url = $url;

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

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of by_create
     */
    public function getByCreate()
    {
        return $this->by_create;
    }

    /**
     * Set the value of by_create
     */
    public function setByCreate($by_create): self
    {
        $this->by_create = $by_create;

        return $this;
    }
}
