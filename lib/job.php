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
    }
}

