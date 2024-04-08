<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
    protected $table = 'posts';
    public function getAllPosts(){
        return DB::table('posts')->get();
    }
    public function getOnePost($id){
        return DB::table($this->table)->where('id', '=', $id)->first();
    }
    public function insertData(){
    // Create
    DB::table('posts')->insert([
        'id' => 51,
        'title' => 'New Title',
        'content' => 'New Content'
    ]);
    }
    public function readData(){
        // Read
        $post = DB::table('posts')->where('id', 51)->first();
        if ($post) {
            // Post found
            // You can access post attributes like $post->title, $post->content, etc.
        } else {
            // Post not found
        }
    }
    // public function mySqlPreparedStatement($id){
    //     $servername = "http://localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "activity_querybuilder";

    //     // Create connection
    //     $conn = new mysqli($servername, $username, $password, $dbname);

    //     // Check connection
    //     if ($conn->connect_error) {
    //         die("Connection failed: " . $conn->connect_error);
    //     }

    //     // Prepare statement
    //     $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
    //     $stmt->bind_param("i", $id);

    //     // Set parameter and execute
    //     $id = 51;
    //     $stmt->execute();

    //     // Get result
    //     $result = $stmt->get_result();
    //     if ($result->num_rows > 0) {
    //         // Fetch data
    //         while ($row = $result->fetch_assoc()) {
    //             // Print or process the data
    //             print_r($row);
    //         }
    //     } else {
    //         echo "No records found";
    //     }

    //     // Close statement and connection
    //     $stmt->close();
    //     $conn->close();
    // }
    public function updatePost(){
        // Update
        DB::table('posts')->where('id', 51)->update([
            'title' => 'Updated Title',
            'description' => 'Updated Content'
        ]);
    }
    public function deletePost(){
    // Delete
        DB::table('posts')->where('id', 51)->delete();
        echo "Post deleted successfully";
        }
    }




