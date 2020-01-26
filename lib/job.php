<?php 


class Job {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get all jobs
    public function getJobs() 
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                        FROM jobs
                        INNER JOIN categories 
                        ON jobs.category_id = categories.id 
                        ORDER BY post_date DESC
                        ");
        // Assign result set
        $results = $this->db->resultSet();

        // print_r($results);

        return $results;
    }

    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        
        // Assign result set
        $results = $this->db->resultSet();

        return $results;

        // print_r($results);

    }

    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                        FROM jobs
                        INNER JOIN categories 
                        ON jobs.category_id = categories.id 
                        WHERE jobs.category_id = $category
                        ORDER BY post_date DESC
                        ");
        // Assign result set
        $results = $this->db->resultSet();

        // print_r($results);

        return $results;    
    }
}

