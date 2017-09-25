<?php

class Crud{
	private $conn;
	public function __construct($host,$user,$pass,$db){
		$this->conn=new mysqli($host,$user,$pass,$db);

		if($this->conn->connect_errno){
			die("Connection Fail for: ".$this->conn->connect_error);
		}
	}
public function getAll2($table,$cols){
			$sql="SELECT $cols FROM $table";
			$query=$this->conn->query($sql);
			if($query->num_rows>0){
					return $query->fetch_all(MYSQLI_ASSOC);
			}
			else{
				return false;
			}
	}

	public function Insert($table,$cols){
		$sql="INSERT INTO $table SET $cols";
		$query=$this->conn->query($sql);
		if($this->conn->affected_rows>0){
			return true;
		}
	}

	public function Login($table,$cols,$condition){

		$sql = "SELECT $cols FROM $table WHERE $condition";

		$result = $this->conn->query($sql);

		if($result->num_rows==1){
			return $result->fetch_assoc();
		}else{
			return false;
		}

	}

	public function EmailExist($table,$cols,$condition){

		$sql = "SELECT $cols FROM $table WHERE $condition";

		$result = $this->conn->query($sql);

		if($result->num_rows>0){
			return $result->fetch_assoc();
		}else{
			return false;
		}

	}

	public function getAll($table,$cols,$table_width="600px", $cellpadding=5,$cellspacing=0,$css_classes="table table-bordered table-hover table-stripped table-condensed"){

		$sql="SELECT $cols FROM $table";

		$query=$this->conn->query($sql);

		if($query->num_rows>0){

			$menus = $query->fetch_All(MYSQLI_ASSOC);

			$table="<table style=\"width:$table_width;margin:0 auto\" border=\"1\"  cellpadding=\"$cellpadding\" cellspacing=\"$cellspacing\" class=\"$css_classes\">";

				$table.="<thead><tr>";

					foreach($menus[0] as $key=>$val){

					$table.= "<th>".$key."</th>";

				}

		

				$table.="</tr></thead>";

				$table.="<tbody>";

					foreach($menus as $menu){

						$table.="<tr>";
							foreach($menu as $val){
								$table.="<td>$val</td>";
							}

						$table.="<td><a href=\"edit.php?id=$menu[id]\" class='btn btn-info'><span class='glyphicon glyphicon-pencil'></span></a> &nbsp; &nbsp;  <a class='btn btn-danger' href=\"read.php?id=$menu[id]\"><span class='glyphicon glyphicon-remove'></span></a>";

						$table.="</tr>";

					}

					$table.="<tr><td class=\"text-right\" colspan=\"4\"><a href=\"insert.php\" class=\"btn btn-info\">Add New Menu</a></td> </tr>";

				$table.="</tbody>";

			$table.="</table>";

			return $table;
		}
		else{
			return false;
		}

	}

	}

	$connection = new Crud("localhost","root","","landed");