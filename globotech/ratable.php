<?php
$server="localhost";
$username="root";
$password="";
$database="running_ac";
	
$con=mysqli_connect($server,$username,$password,$database);
	
$sql="show tables from $database";
$result=mysqli_query($con,$sql);
if ($result->num_rows == 0) 
{
	$tablename="rabill_1";
}
else
{
	$table="rabill_1";
	$sql="SHOW TABLES LIKE '".$table."'";
	$result=mysqli_query($con,$sql);
	if ($result == true ) 
	{
		if($result->num_rows == 1) 
		{
			$tablename="rabill_2";
		}
	}
	else 
	{
		$table="rabill_2";
		$sql="SHOW TABLES LIKE '".$table."'";
		$result=mysqli_query($con,$sql);
		if ($result == true ) 
		{
			if($result->num_rows == 1) 
			{
				$tablename="rabill_3";
			}
		}
		else 
		{
			$table="rabill_3";
			$sql="SHOW TABLES LIKE '".$table."'";
			$result=mysqli_query($con,$sql);
			if ($result == true ) 
			{
				if($result->num_rows == 1) 
				{
					$tablename="rabill_4";
				}
			}
			else 
			{
				$table="rabill_4";
				$sql="SHOW TABLES LIKE '".$table."'";
				$result=mysqli_query($con,$sql);
				if ($result == true ) 
				{
					if($result->num_rows == 1) 
					{
						$tablename="rabill_5";
					}
				}
				else 
				{
					$table="rabill_5";
					$sql="SHOW TABLES LIKE '".$table."'";
					$result=mysqli_query($con,$sql);
					if ($result == true ) 
					{
						if($result->num_rows == 1) 
						{
							$tablename="rabill_6";
						}
					}
					else 
					{
						$table="rabill_6";
						$sql="SHOW TABLES LIKE '".$table."'";
						$result=mysqli_query($con,$sql);
						if ($result == true ) 
						{
							if($result->num_rows == 1) 
							{
								$tablename="rabill_7";
							}
						}
						else 
						{
							$table="rabill_7";
							$sql="SHOW TABLES LIKE '".$table."'";
							$result=mysqli_query($con,$sql);
							if ($result == true ) 
							{
								if($result->num_rows == 1) 
								{
									$tablename="rabill_8";
								}
							}
							else
							{
								$table="rabill_8";
								$sql="SHOW TABLES LIKE '".$table."'";
								$result=mysqli_query($con,$sql);
								if ($result == true ) 
								{
									if($result->num_rows == 1) 
									{
										$tablename="rabill_9";
									}	
								}
								else
								{
									$table="rabill_9";
									$sql="SHOW TABLES LIKE '".$table."'";
									$result=mysqli_query($con,$sql);
									if ($result == true ) 
									{
										if($result->num_rows == 1) 
										{
											$tablename="rabill_10";
										}	
									}
									else
									{
										$table="rabill_10";
										$sql="SHOW TABLES LIKE '".$table."'";
										$result=mysqli_query($con,$sql);
										if ($result == true ) 
										{
											if($result->num_rows == 1) 
											{
												$tablename="rabill_11";
											}	
										}
										else
										{
											$table="rabill_11";
											$sql="SHOW TABLES LIKE '".$table."'";
											$result=mysqli_query($con,$sql);
											if ($result == true ) 
											{
												if($result->num_rows == 1) 
												{
													$tablename="rabill_12";
												}	
											}
											else
											{
												$table="rabill_12";
												$sql="SHOW TABLES LIKE '".$table."'";
												$result=mysqli_query($con,$sql);
												if ($result == true ) 
												{
													if($result->num_rows == 1) 
													{
														$tablename="rabill_13";
													}	
												}
												else
												{
													$table="rabill_13";
													$sql="SHOW TABLES LIKE '".$table."'";
													$result=mysqli_query($con,$sql);
													if ($result == true ) 
													{
														if($result->num_rows == 1) 
														{
															$tablename="rabill_14";
														}	
													}
													else
													{
														$table="rabill_14";
														$sql="SHOW TABLES LIKE '".$table."'";
														$result=mysqli_query($con,$sql);
														if ($result == true ) 
														{
															if($result->num_rows == 1) 
															{
																$tablename="rabill_15";
															}	
														}
														else
														{
															$table="rabill_15";
															$sql="SHOW TABLES LIKE '".$table."'";
															$result=mysqli_query($con,$sql);
															if ($result == true ) 
															{
																if($result->num_rows == 1) 
																{
																	$tablename="rabill_16";
																}	
															}
															else
															{
																$table="rabill_16";
																$sql="SHOW TABLES LIKE '".$table."'";
																$result=mysqli_query($con,$sql);
																if ($result == true ) 
																{
																	if($result->num_rows == 1) 
																	{
																		$tablename="rabill_17";
																	}	
																}
																else
																{
																	$table="rabill_17";
																	$sql="SHOW TABLES LIKE '".$table."'";
																	$result=mysqli_query($con,$sql);
																	if ($result == true ) 
																	{
																		if($result->num_rows == 1) 
																		{
																			$tablename="rabill_18";
																		}	
																	}
																	else
																	{
																		$table="rabill_18";
																		$sql="SHOW TABLES LIKE '".$table."'";
																		$result=mysqli_query($con,$sql);
																		if ($result == true ) 
																		{
																			if($result->num_rows == 1) 
																			{
																				$tablename="rabill_19";
																			}	
																		}
																		else
																		{
																			$table="rabill_19";
																			$sql="SHOW TABLES LIKE '".$table."'";
																			$result=mysqli_query($con,$sql);
																			if ($result == true ) 
																			{
																				if($result->num_rows == 1) 
																				{
																					$tablename="rabill_20";
																				}	
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
echo "<h3><p align='center'>$tablename</p></h3>";
$con->close();

if(isset($_POST['q1']))
{
	$server="localhost";
	$username="root";
	$password="";
	$database="running_ac";
	
	$con=mysqli_connect($server,$username,$password,$database);
	
	if (!$con)
	{
		die("failed". mysqli_connect_erre());
	}
	
	$sql1="CREATE TABLE `$tablename` (id int auto_increment,quantity decimal(10,2),up_to_date decimal(10,2),previous_bill decimal(10,2), PRIMARY KEY(id))";
	$result1=mysqli_query($con,$sql1);
	$sql2="ALTER TABLE `$tablename` AUTO_INCREMENT=1";
	$result2=mysqli_query($con,$sql2);
	if ($result1==true && $result2==true)
	{
	$q1=$_POST['q1'];
	$u1=$_POST['u1'];
	$p1=$_POST['p1'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q1', '$u1', '$p1')";
	$result=mysqli_query($con,$sql);
	$q2=$_POST['q2'];
	$u2=$_POST['u2'];
	$p2=$_POST['p2'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q2', '$u2', '$p2')";
	$result=mysqli_query($con,$sql);
	$q3=$_POST['q3'];
	$u3=$_POST['u3'];
	$p3=$_POST['p3'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q3', '$u3', '$p3')";
	$result=mysqli_query($con,$sql);
	$q4=$_POST['q4'];
	$u4=$_POST['u4'];
	$p4=$_POST['p4'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q4', '$u4', '$p4')";
	$result=mysqli_query($con,$sql);
	$q5=$_POST['q5'];
	$u5=$_POST['u5'];
	$p5=$_POST['p5'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q5', '$u5', '$p5')";
	$result=mysqli_query($con,$sql);
	$q6=$_POST['q6'];
	$u6=$_POST['u6'];
	$p6=$_POST['p6'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q6', '$u6', '$p6')";
	$result=mysqli_query($con,$sql);
	$q7=$_POST['q7'];
	$u7=$_POST['u7'];
	$p7=$_POST['p7'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q7', '$u7', '$p7')";
	$result=mysqli_query($con,$sql);
	$q8=$_POST['q8'];
	$u8=$_POST['u8'];
	$p8=$_POST['p8'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q8', '$u8', '$p8')";
	$result=mysqli_query($con,$sql);
	$q9=$_POST['q9'];
	$u9=$_POST['u9'];
	$p9=$_POST['p9'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q9', '$u9', '$p9')";
	$result=mysqli_query($con,$sql);
	$q10=$_POST['q10'];
	$u10=$_POST['u10'];
	$p10=$_POST['p10'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q10', '$u10', '$p10')";
	$result=mysqli_query($con,$sql);
	$q11=$_POST['q11'];
	$u11=$_POST['u11'];
	$p11=$_POST['p11'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q11', '$u11', '$p11')";
	$result=mysqli_query($con,$sql);
	$q12=$_POST['q12'];
	$u12=$_POST['u12'];
	$p12=$_POST['p12'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q12', '$u12', '$p12')";
	$result=mysqli_query($con,$sql);
	$q13=$_POST['q13'];
	$u13=$_POST['u13'];
	$p13=$_POST['p13'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q13', '$u13', '$p13')";
	$result=mysqli_query($con,$sql);
	$q14=$_POST['q14'];
	$u14=$_POST['u14'];
	$p14=$_POST['p14'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q14', '$u14', '$p14')";
	$result=mysqli_query($con,$sql);
	$q15=$_POST['q15'];
	$u15=$_POST['u15'];
	$p15=$_POST['p15'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q15', '$u15', '$p15')";
	$result=mysqli_query($con,$sql);
	$q16=$_POST['q16'];
	$u16=$_POST['u16'];
	$p16=$_POST['p16'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q16', '$u16', '$p16')";
	$result=mysqli_query($con,$sql);
	$q17=$_POST['q17'];
	$u17=$_POST['u17'];
	$p17=$_POST['p17'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q17', '$u17', '$p17')";
	$result=mysqli_query($con,$sql);
	$q18=$_POST['q18'];
	$u18=$_POST['u18'];
	$p18=$_POST['p18'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q18', '$u18', '$p18')";
	$result=mysqli_query($con,$sql);
	$q19=$_POST['q19'];
	$u19=$_POST['u19'];
	$p19=$_POST['p19'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q19', '$u19', '$p19')";
	$result=mysqli_query($con,$sql);
	$q20=$_POST['q20'];
	$u20=$_POST['u20'];
	$p20=$_POST['p20'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q20', '$u20', '$p20')";
	$result=mysqli_query($con,$sql);
	$q21=$_POST['q21'];
	$u21=$_POST['u21'];
	$p21=$_POST['p21'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q21', '$u21', '$p21')";
	$result=mysqli_query($con,$sql);
	$q22=$_POST['q22'];
	$u22=$_POST['u22'];
	$p22=$_POST['p22'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q22', '$u22', '$p22')";
	$result=mysqli_query($con,$sql);
	$q23=$_POST['q23'];
	$u23=$_POST['u23'];
	$p23=$_POST['p23'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q23', '$u23', '$p23')";
	$result=mysqli_query($con,$sql);
	$q24=$_POST['q24'];
	$u24=$_POST['u24'];
	$p24=$_POST['p24'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q24', '$u24', '$p24')";
	$result=mysqli_query($con,$sql);
	$q25=$_POST['q25'];
	$u25=$_POST['u25'];
	$p25=$_POST['p25'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q25', '$u25', '$p25')";
	$result=mysqli_query($con,$sql);
	$q26=$_POST['q26'];
	$u26=$_POST['u26'];
	$p26=$_POST['p26'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q26', '$u26', '$p26')";
	$result=mysqli_query($con,$sql);
	$q27=$_POST['q27'];
	$u27=$_POST['u27'];
	$p27=$_POST['p27'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q27', '$u27', '$p27')";
	$result=mysqli_query($con,$sql);
	$q28=$_POST['q28'];
	$u28=$_POST['u28'];
	$p28=$_POST['p28'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q28', '$u28', '$p28')";
	$result=mysqli_query($con,$sql);
	$q29=$_POST['q29'];
	$u29=$_POST['u29'];
	$p29=$_POST['p29'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q29', '$u29', '$p29')";
	$result=mysqli_query($con,$sql);
	$q30=$_POST['q30'];
	$u30=$_POST['u30'];
	$p30=$_POST['p30'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q30', '$u30', '$p30')";
	$result=mysqli_query($con,$sql);
	$q31=$_POST['q31'];
	$u31=$_POST['u31'];
	$p31=$_POST['p31'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q31', '$u31', '$p31')";
	$result=mysqli_query($con,$sql);
	$q32=$_POST['q32'];
	$u32=$_POST['u32'];
	$p32=$_POST['p32'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q32', '$u32', '$p32')";
	$result=mysqli_query($con,$sql);
	$q33=$_POST['q33'];
	$u33=$_POST['u33'];
	$p33=$_POST['p33'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q33', '$u33', '$p33')";
	$result=mysqli_query($con,$sql);
	$q34=$_POST['q34'];
	$u34=$_POST['u34'];
	$p34=$_POST['p34'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q34', '$u34', '$p34')";
	$result=mysqli_query($con,$sql);
	$q35=$_POST['q35'];
	$u35=$_POST['u35'];
	$p35=$_POST['p35'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q35', '$u35', '$p35')";
	$result=mysqli_query($con,$sql);
	$q36=$_POST['q36'];
	$u36=$_POST['u36'];
	$p36=$_POST['p36'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q36', '$u36', '$p36')";
	$result=mysqli_query($con,$sql);
	$q37=$_POST['q37'];
	$u37=$_POST['u37'];
	$p37=$_POST['p37'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q37', '$u37', '$p37')";
	$result=mysqli_query($con,$sql);
	$q38=$_POST['q38'];
	$u38=$_POST['u38'];
	$p38=$_POST['p38'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q38', '$u38', '$p38')";
	$result=mysqli_query($con,$sql);
	$q39=$_POST['q39'];
	$u39=$_POST['u39'];
	$p39=$_POST['p39'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q39', '$u39', '$p39')";
	$result=mysqli_query($con,$sql);
	$q40=$_POST['q40'];
	$u40=$_POST['u40'];
	$p40=$_POST['p40'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q40', '$u40', '$p40')";
	$result=mysqli_query($con,$sql);
	$q41=$_POST['q41'];
	$u41=$_POST['u41'];
	$p41=$_POST['p41'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q41', '$u41', '$p41')";
	$result=mysqli_query($con,$sql);
	$q42=$_POST['q42'];
	$u42=$_POST['u42'];
	$p42=$_POST['p42'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q42', '$u42', '$p42')";
	$result=mysqli_query($con,$sql);
	$q43=$_POST['q43'];
	$u43=$_POST['u43'];
	$p43=$_POST['p43'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q43', '$u43', '$p43')";
	$result=mysqli_query($con,$sql);
	$q44=$_POST['q44'];
	$u44=$_POST['u44'];
	$p44=$_POST['p44'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q44', '$u44', '$p44')";
	$result=mysqli_query($con,$sql);
	$q45=$_POST['q45'];
	$u45=$_POST['u45'];
	$p45=$_POST['p45'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q45', '$u45', '$p45')";
	$result=mysqli_query($con,$sql);
	$q46=$_POST['q46'];
	$u46=$_POST['u46'];
	$p46=$_POST['p46'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q46', '$u46', '$p46')";
	$result=mysqli_query($con,$sql);
	$q47=$_POST['q47'];
	$u47=$_POST['u47'];
	$p47=$_POST['p47'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q47', '$u47', '$p47')";
	$result=mysqli_query($con,$sql);
	$q48=$_POST['q48'];
	$u48=$_POST['u48'];
	$p48=$_POST['p48'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q48', '$u48', '$p48')";
	$result=mysqli_query($con,$sql);
	$q49=$_POST['q49'];
	$u49=$_POST['u49'];
	$p49=$_POST['p49'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q49', '$u49', '$p49')";
	$result=mysqli_query($con,$sql);
	$q50=$_POST['q50'];
	$u50=$_POST['u50'];
	$p50=$_POST['p50'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q50', '$u50', '$p50')";
	$result=mysqli_query($con,$sql);
	$q51=$_POST['q51'];
	$u51=$_POST['u51'];
	$p51=$_POST['p51'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q51', '$u51', '$p51')";
	$result=mysqli_query($con,$sql);
	$q52=$_POST['q52'];
	$u52=$_POST['u52'];
	$p52=$_POST['p52'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q52', '$u52', '$p52')";
	$result=mysqli_query($con,$sql);
	$q53=$_POST['q53'];
	$u53=$_POST['u53'];
	$p53=$_POST['p53'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q53', '$u53', '$p53')";
	$result=mysqli_query($con,$sql);
	$q54=$_POST['q54'];
	$u54=$_POST['u54'];
	$p54=$_POST['p54'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q54', '$u54', '$p54')";
	$result=mysqli_query($con,$sql);
	$q55=$_POST['q55'];
	$u55=$_POST['u55'];
	$p55=$_POST['p55'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q55', '$u55', '$p55')";
	$result=mysqli_query($con,$sql);
	$q56=$_POST['q56'];
	$u56=$_POST['u56'];
	$p56=$_POST['p56'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q56', '$u56', '$p56')";
	$result=mysqli_query($con,$sql);
	$q57=$_POST['q57'];
	$u57=$_POST['u57'];
	$p57=$_POST['p57'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q57', '$u57', '$p57')";
	$result=mysqli_query($con,$sql);
	$q58=$_POST['q58'];
	$u58=$_POST['u58'];
	$p58=$_POST['p58'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q58', '$u58', '$p58')";
	$result=mysqli_query($con,$sql);
	$q59=$_POST['q59'];
	$u59=$_POST['u59'];
	$p59=$_POST['p59'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q59', '$u59', '$p59')";
	$result=mysqli_query($con,$sql);
	$q60=$_POST['q60'];
	$u60=$_POST['u60'];
	$p60=$_POST['p60'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q60', '$u60', '$p60')";
	$result=mysqli_query($con,$sql);
	$q61=$_POST['q61'];
	$u61=$_POST['u61'];
	$p61=$_POST['p61'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q61', '$u61', '$p61')";
	$result=mysqli_query($con,$sql);
	$q62=$_POST['q62'];
	$u62=$_POST['u62'];
	$p62=$_POST['p62'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q62', '$u62', '$p62')";
	$result=mysqli_query($con,$sql);
	$q63=$_POST['q63'];
	$u63=$_POST['u63'];
	$p63=$_POST['p63'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q63', '$u63', '$p63')";
	$result=mysqli_query($con,$sql);
	$q64=$_POST['q64'];
	$u64=$_POST['u64'];
	$p64=$_POST['p64'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q64', '$u64', '$p64')";
	$result=mysqli_query($con,$sql);
	$q65=$_POST['q65'];
	$u65=$_POST['u65'];
	$p65=$_POST['p65'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q65', '$u65', '$p65')";
	$result=mysqli_query($con,$sql);
	$q66=$_POST['q66'];
	$u66=$_POST['u66'];
	$p66=$_POST['p66'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q66', '$u66', '$p66')";
	$result=mysqli_query($con,$sql);
	$q67=$_POST['q67'];
	$u67=$_POST['u67'];
	$p67=$_POST['p67'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q67', '$u67', '$p67')";
	$result=mysqli_query($con,$sql);
	$q68=$_POST['q68'];
	$u68=$_POST['u68'];
	$p68=$_POST['p68'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q68', '$u68', '$p68')";
	$result=mysqli_query($con,$sql);
	$q69=$_POST['q69'];
	$u69=$_POST['u69'];
	$p69=$_POST['p69'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q69', '$u69', '$p69')";
	$result=mysqli_query($con,$sql);
	$q70=$_POST['q70'];
	$u70=$_POST['u70'];
	$p70=$_POST['p70'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q70', '$u70', '$p70')";
	$result=mysqli_query($con,$sql);
	$q71=$_POST['q71'];
	$u71=$_POST['u71'];
	$p71=$_POST['p71'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q71', '$u71', '$p71')";
	$result=mysqli_query($con,$sql);
	$q72=$_POST['q72'];
	$u72=$_POST['u72'];
	$p72=$_POST['p72'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q72', '$u72', '$p72')";
	$result=mysqli_query($con,$sql);
	$q73=$_POST['q73'];
	$u73=$_POST['u73'];
	$p73=$_POST['p73'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q73', '$u73', '$p73')";
	$result=mysqli_query($con,$sql);
	$q74=$_POST['q74'];
	$u74=$_POST['u74'];
	$p74=$_POST['p74'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q74', '$u74', '$p74')";
	$result=mysqli_query($con,$sql);
	$q75=$_POST['q75'];
	$u75=$_POST['u75'];
	$p75=$_POST['p75'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q75', '$u75', '$p75')";
	$result=mysqli_query($con,$sql);
	$q76=$_POST['q76'];
	$u76=$_POST['u76'];
	$p76=$_POST['p76'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q76', '$u76', '$p76')";
	$result=mysqli_query($con,$sql);
	$q77=$_POST['q77'];
	$u77=$_POST['u77'];
	$p77=$_POST['p77'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q77', '$u77', '$p77')";
	$result=mysqli_query($con,$sql);
	$q78=$_POST['q78'];
	$u78=$_POST['u78'];
	$p78=$_POST['p78'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q78', '$u78', '$p78')";
	$result=mysqli_query($con,$sql);
	$q79=$_POST['q79'];
	$u79=$_POST['u79'];
	$p79=$_POST['p79'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q79', '$u79', '$p79')";
	$result=mysqli_query($con,$sql);
	$q80=$_POST['q80'];
	$u80=$_POST['u80'];
	$p80=$_POST['p80'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q80', '$u80', '$p80')";
	$result=mysqli_query($con,$sql);
	$q81=$_POST['q81'];
	$u81=$_POST['u81'];
	$p81=$_POST['p81'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q81', '$u81', '$p81')";
	$result=mysqli_query($con,$sql);
	$q82=$_POST['q82'];
	$u82=$_POST['u82'];
	$p82=$_POST['p82'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q82', '$u82', '$p82')";
	$result=mysqli_query($con,$sql);
	$q83=$_POST['q83'];
	$u83=$_POST['u83'];
	$p83=$_POST['p83'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q83', '$u38', '$p83')";
	$result=mysqli_query($con,$sql);
	$q84=$_POST['q84'];
	$u84=$_POST['u84'];
	$p84=$_POST['p84'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q84', '$u84', '$p84')";
	$result=mysqli_query($con,$sql);
	$q85=$_POST['q85'];
	$u85=$_POST['u85'];
	$p85=$_POST['p85'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q85', '$u85', '$p85')";
	$result=mysqli_query($con,$sql);
	$q86=$_POST['q86'];
	$u86=$_POST['u86'];
	$p86=$_POST['p86'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q86', '$u86', '$p86')";
	$result=mysqli_query($con,$sql);
	$q87=$_POST['q87'];
	$u87=$_POST['u87'];
	$p87=$_POST['p87'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q87', '$u87', '$p87')";
	$result=mysqli_query($con,$sql);
	$q88=$_POST['q88'];
	$u88=$_POST['u88'];
	$p88=$_POST['p88'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q88', '$u88', '$p88')";
	$result=mysqli_query($con,$sql);
	$q89=$_POST['q89'];
	$u89=$_POST['u89'];
	$p89=$_POST['p89'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q89', '$u89', '$p89')";
	$result=mysqli_query($con,$sql);
	$q90=$_POST['q90'];
	$u90=$_POST['u90'];
	$p90=$_POST['p90'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q90', '$u90', '$p90')";
	$result=mysqli_query($con,$sql);
	$q91=$_POST['q91'];
	$u91=$_POST['u91'];
	$p91=$_POST['p91'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q91', '$u91', '$p91')";
	$result=mysqli_query($con,$sql);
	$q92=$_POST['q92'];
	$u92=$_POST['u92'];
	$p92=$_POST['p92'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q92', '$u92', '$p92')";
	$result=mysqli_query($con,$sql);
	$q93=$_POST['q93'];
	$u93=$_POST['u93'];
	$p93=$_POST['p93'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q93', '$u93', '$p93')";
	$result=mysqli_query($con,$sql);
	$q94=$_POST['q94'];
	$u94=$_POST['u94'];
	$p94=$_POST['p94'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q94', '$u94', '$p94')";
	$result=mysqli_query($con,$sql);
	$q95=$_POST['q95'];
	$u95=$_POST['u95'];
	$p95=$_POST['p95'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q95', '$u95', '$p95')";
	$result=mysqli_query($con,$sql);
	$q96=$_POST['q96'];
	$u96=$_POST['u96'];
	$p96=$_POST['p96'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q96', '$u96', '$p96')";
	$result=mysqli_query($con,$sql);
	$q97=$_POST['q97'];
	$u97=$_POST['u97'];
	$p97=$_POST['p97'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q97', '$u97', '$p97')";
	$result=mysqli_query($con,$sql);
	$q98=$_POST['q98'];
	$u98=$_POST['u98'];
	$p98=$_POST['p98'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q98', '$u98', '$p98')";
	$result=mysqli_query($con,$sql);
	$q99=$_POST['q99'];
	$u99=$_POST['u99'];
	$p99=$_POST['p99'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q99', '$u99', '$p99')";
	$result=mysqli_query($con,$sql);
	$q100=$_POST['q100'];
	$u100=$_POST['u100'];
	$p100=$_POST['p100'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q100', '$u100', '$p100')";
	$result=mysqli_query($con,$sql);
	$q101=$_POST['q101'];
	$u101=$_POST['u101'];
	$p101=$_POST['p101'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q101', '$u101', '$p101')";
	$result=mysqli_query($con,$sql);
	$q102=$_POST['q102'];
	$u102=$_POST['u102'];
	$p102=$_POST['p102'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q102', '$u102', '$p102')";
	$result=mysqli_query($con,$sql);
	$q103=$_POST['q103'];
	$u103=$_POST['u103'];
	$p103=$_POST['p103'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q103', '$u103', '$p103')";
	$result=mysqli_query($con,$sql);
	$q104=$_POST['q104'];
	$u104=$_POST['u104'];
	$p104=$_POST['p104'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q104', '$u104', '$p104')";
	$result=mysqli_query($con,$sql);
	$q105=$_POST['q105'];
	$u105=$_POST['u105'];
	$p105=$_POST['p105'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q105', '$u105', '$p105')";
	$result=mysqli_query($con,$sql);
	$q106=$_POST['q106'];
	$u106=$_POST['u106'];
	$p106=$_POST['p106'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q106', '$u106', '$p106')";
	$result=mysqli_query($con,$sql);
	$q107=$_POST['q107'];
	$u107=$_POST['u107'];
	$p107=$_POST['p107'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q107', '$u107', '$p107')";
	$result=mysqli_query($con,$sql);
	$q108=$_POST['q108'];
	$u108=$_POST['u108'];
	$p108=$_POST['p108'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q108', '$u108', '$p108')";
	$result=mysqli_query($con,$sql);
	$q109=$_POST['q109'];
	$u109=$_POST['u109'];
	$p109=$_POST['p109'];
	$sql="INSERT INTO `$tablename` (`quantity`, `up_to_date`, `previous_bill`) VALUES ('$q109', '$u109', '$p109')";
	$result=mysqli_query($con,$sql);
	$u110=$_POST['u110'];
	$p110=$_POST['p110'];
	$sql="INSERT INTO `$tablename` (`up_to_date`, `previous_bill`) VALUES ('$u110', '$p110')";
	$result=mysqli_query($con,$sql);
	$u111=$_POST['u111'];
	$p111=$_POST['p111'];
	$sql="INSERT INTO `$tablename` (`up_to_date`, `previous_bill`) VALUES ('$u111', '$p111')";
	$result=mysqli_query($con,$sql);
	$u112=$_POST['u112'];
	$p112=$_POST['p112'];
	$sql="INSERT INTO `$tablename` (`up_to_date`, `previous_bill`) VALUES ('$u112', '$p112')";
	$result=mysqli_query($con,$sql);
	$u113=$_POST['u113'];
	$p113=$_POST['p113'];
	$sql="INSERT INTO `$tablename` (`up_to_date`, `previous_bill`) VALUES ('$u113', '$p113')";
	$result=mysqli_query($con,$sql);
	}
}

?>
<html>
	<head>
		<title>Running Account Bill</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<head>
			<style>
				.input{border-color:transparent;}
				.btn:hover{background:#E5B400;}
				.btn{padding:8px;font-size:15px;}
				a{padding:8px;text-decoration:none;background:lightgray;color:black;}
				a:hover{background:#E5B400;}
				i{margin-right:8px}
			</style>
		</head>
	</head>
	<body>
		<?php
			/*$name=$_GET ['name'];
			echo "<h3><p align='center'>$name</p></h3>";*/
		?>
		<form action="ratable.php" method="post">
			<table border='1'>
				<tr>
					<th rowspan="2">BOQ No.</th>
					<th rowspan="2">MoRTH <br> Specification No.</th>
					<th rowspan="2">Items of work (grouped under 'Sub head' and 'sub works' of estimate)</th>
					<th rowspan="2">Unit</th>
					<th rowspan="2">Rate Rs.</th>
					<th rowspan="2">Quantity executed <br> up-to-date as per <br> Measurement Book</th>
					<th colspan="2">Payment on the basis of actual measurements</th>
				</tr>
				<tr>
					<th>Up-to-date</th>
					<th>Since previous bill</th>
				</tr>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
				</tr>
				<tr>
					<td></td><td></td><td></td><td></td>
					<td>Rs. P.</td><td></td>
					<td>Rs. P.</td>
					<td>Rs. P.</td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO 1. SITE CLEARANCE AND DISMANTLING</td>
					<td></td><td></td><td></td><td style="color:white;"></td><td></td>
				</tr>
				<tr>
					<td>1.01</td>
					<td>201</td>
					<td>Clearing and grubbing road land complete as per Technical Specifications Clause 201.</td>
					<td>Hectare</td>
					<td>37000.00</td>
					<td><input type="text" class="input" name="q1" id="q1"></td>
					<td><input type="text" class="input" name="u1" id="u1"></td>
					<td><input type="text" class="input" name="p1" id="p1"></td>
				</tr>
				<tr>
					<td>1.02</td>
					<td>202</td>
					<td>Dismantling including disposal of unserviceable material and stacking the serviceable material complete as per Technical Specifications Clause 202.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>a) Brick/Stone Structures.</td>
					<td>Cum</td>
					<td>148.00</td>
					<td><input type="text" class="input" name="q2" id="q2"></td>
					<td><input type="text" class="input" name="u2" id="u2"></td>
					<td><input type="text" class="input" name="p2" id="p2"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>b) Plain Concrete/Reinforced concrete/ Pre stressed concrete structures including cleaning, straightening & cutting of bars and separating them out from RCC/PSC.</td>
					<td>Cum</td>
					<td>592.00</td>
					<td><input type="text" class="input" name="q3" id="q3"></td>
					<td><input type="text" class="input" name="u3" id="u3"></td>
					<td><input type="text" class="input" name="p3" id="p3"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>d) Km Stone including foundation concrete if any.</td>
					<td>Nos</td>
					<td>148.00</td>
					<td><input type="text" class="input" name="q4" id="q4"></td>
					<td><input type="text" class="input" name="u4" id="u4"></td>
					<td><input type="text" class="input" name="p4" id="p4"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>e) Hume pipes</td>
					<td>M</td>
					<td>296.00</td>
					<td><input type="text" class="input" name="q5" id="q5"></td>
					<td><input type="text" class="input" name="u5" id="u5"></td>
					<td><input type="text" class="input" name="p5" id="p5"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>h) Sign boards/bill boards</td>
					<td>Nos</td>
					<td>222.00</td>
					<td><input type="text" class="input" name="q6" id="q6"></td>
					<td><input type="text" class="input" name="u6" id="u6"></td>
					<td><input type="text" class="input" name="p6" id="p6"></td>
				</tr>
				<tr>
					<td>1.03</td>
					<td>201</td>
					<td>Cutting tree including removal of stumps, dressing the ground, transporting the same and stacking properly, complete as per technical specification clause 201,</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(a) girth above 300mm and upto 600 mm</td>
					<td>Nos</td>
					<td>666.00</td>
					<td><input type="text" class="input" name="q7" id="q7"></td>
					<td><input type="text" class="input" name="u7" id="u7"></td>
					<td><input type="text" class="input" name="p7" id="p7"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(b) girth above 600mm and upto 1000 mm</td>
					<td>Nos</td>
					<td>1184.00</td>
					<td><input type="text" class="input" name="q8" id="q8"></td>
					<td><input type="text" class="input" name="u8" id="u8"></td>
					<td><input type="text" class="input" name="p8" id="p8"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(c) girth above 1000mm and upto 1500 mm</td>
					<td>Nos</td>
					<td>2960.00</td>
					<td><input type="text" class="input" name="q9" id="q9"></td>
					<td><input type="text" class="input" name="u9" id="u9"></td>
					<td><input type="text" class="input" name="p9" id="p9"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(d) girth above 1500mm</td>
					<td>Nos</td>
					<td>6660.00</td>
					<td><input type="text" class="input" name="q10" id="q10"></td>
					<td><input type="text" class="input" name="u10" id="u10"></td>
					<td><input type="text" class="input" name="p10" id="p10"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO 2.EARTH WORK</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>2.01</td>
					<td>301</td>
					<td>(a) Excavation in all types of soli In hilly area necessary for construction of roadway by mechanical means Including cutting and trimming of side slopes and disposing of excavated earth with all lifts and lead and all complete as per Technical Specifications CI.301.</td>
					<td>Cum</td>
					<td>84.00</td>
					<td><input type="text" class="input" name="q11" id="q11"></td>
					<td><input type="text" class="input" name="u11" id="u11"></td>
					<td><input type="text" class="input" name="p11" id="p11"></td>
				</tr>
				<tr>
					<td>2.01</td>
					<td>301</td>
					<td>(b) Excavation of ordinary /hard rock in hilly area necessary for construction of roadway by mechanical means Including cutting and trimming of side slopes and disposal of cut material with all lifts and lead and all complete as per Technical Specifications CI.301,</td>
					<td>Cum</td>
					<td>276.00</td>
					<td><input type="text" class="input" name="q12" id="q12"></td>
					<td><input type="text" class="input" name="u12" id="u12"></td>
					<td><input type="text" class="input" name="p12" id="p12"></td>
				</tr>
				<tr>
					<td>2.02</td>
					<td>305</td>
					<td>Construction of embankment with suitable material obtained from roadway, drainage excavation etc. with all leads and lifts all complete, as per approved drawings and Technical Specifications Clause 305.</td>
					<td>Cum</td>
					<td>71.00</td>
					<td><input type="text" class="input" name="q13" id="q13"></td>
					<td><input type="text" class="input" name="u13" id="u13"></td>
					<td><input type="text" class="input" name="p13" id="p13"></td>
				</tr>
				<tr>
					<td>S1</td>
					<td>401</td>
					<td>Construction of hard shoulder with Granular Sub-base with Close Graded Material By Plant Mix Method (Construction of granular sub-base by providing grade I close graded material, spreading in uniform layers with motor grader on prepared surface, mixing by mix in place method with rotavator at OMC, and compacting with vibratory roller to achieve the desired density, complete as per clause 401.</td>
					<td>Cum</td>
					<td>1122.00</td>
					<td><input type="text" class="input" name="q14" id="q14"></td>
					<td><input type="text" class="input" name="u14" id="u14"></td>
					<td><input type="text" class="input" name="p14" id="p14"></td>
				</tr>
				<tr>
					<td>2.04</td>
					<td>305 & 407</td>
					<td>Filling in median/island With approved material obtained from road way excavation with all leads and lifts complete as per Technical Specifications Clauses 305 & 407.</td>
					<td>Cum</td>
					<td>41.00</td>
					<td><input type="text" class="input" name="q15" id="q15"></td>
					<td><input type="text" class="input" name="u15" id="u15"></td>
					<td><input type="text" class="input" name="p15" id="p15"></td>
				</tr>
				<tr>
					<td>2.05</td>
					<td>307</td>
					<td>Turfing of embankment slopes, verge earthen shoulders and other locations with rough grassing all complete as per Technical Specifications Clause 307.</td>
					<td>sq.m.</td>
					<td>44.00</td>
					<td><input type="text" class="input" name="q16" id="q16"></td>
					<td><input type="text" class="input" name="u16" id="u16"></td>
					<td><input type="text" class="input" name="p16" id="p16"></td>
				</tr>
				<tr>
					<td>E1</td>
					<td>305</td>
					<td>Construction of sub grade with approved materials deposited at site from roadway cutting and excavation from drain and foundation of other structures graded and compacted to meet requirement of table 300-2.</td>
					<td>Cum</td>
					<td>220.00</td>
					<td><input type="text" class="input" name="q17" id="q17"></td>
					<td><input type="text" class="input" name="u17" id="u17"></td>
					<td><input type="text" class="input" name="p17" id="p17"></td>
				</tr>
				<tr>
					<td>E2</td>
					<td>301.9.6</td>
					<td>Disposal of surplus earth from roadway beyond initial lead of 1000 m.</td>
					<td>Cum</td>
					<td>25.15</td>
					<td><input type="text" class="input" name="q18" id="q18"></td>
					<td><input type="text" class="input" name="u18" id="u18"></td>
					<td><input type="text" class="input" name="p18" id="p18"></td>
				</tr>
				<tr>
					<td>E3</td>
					<td>301</td>
					<td>Removal of Unsuitable soil including excavation, loading and disposal up to 1000 metres lead but excluding replacement by suitable soil which shall be paid separately as per clause 305.</td>
					<td>Cum</td>
					<td>72.00</td>
					<td><input type="text" class="input" name="q19" id="q19"></td>
					<td><input type="text" class="input" name="u19" id="u19"></td>
					<td><input type="text" class="input" name="p19" id="p19"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO  3 GRANULAR BASE AND SUBBASE COURSE</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>3.01</td>
					<td>401</td>
					<td>Granular Sub-base with Close Graded Material By Plant Mix Method (Construction of granular sub-base by providing grade I close graded material, spreading in uniform layers with motor grader on prepared surface, mixing by mix in place method with rotavator at OMC, and compacting with vibratory roller to achieve the desired density, complete as per clause 401.</td>
					<td>Cum</td>
					<td>1122.00</td>
					<td><input type="text" class="input" name="q20" id="q20"></td>
					<td><input type="text" class="input" name="u20" id="u20"></td>
					<td><input type="text" class="input" name="p20" id="p20"></td>
				</tr>
				<tr>
					<td>3.02</td>
					<td>406</td>
					<td>Wet Mix Macadam (Providing, laying, spreading and compacting graded stone aggregate to wet mix macadam specification Including premixing the Material with water at OMC in mechanical mix plant carriage of mixed Material by tipper to site, laying in uniform layers with paver In sub- base / base course on well prepared surface and compacting with vibratory roller to achieve the desired density, complete as per clause406.</td>
					<td>Cum</td>
					<td>1871.00</td>
					<td><input type="text" class="input" name="q21" id="q21"></td>
					<td><input type="text" class="input" name="u21" id="u21"></td>
					<td><input type="text" class="input" name="p21" id="p21"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO 4. BITUMINOUS COURSE</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>4.01</td>
					<td>502</td>
					<td>Prime coat (Providing and applying primer coat with bitumen emulsion on prepared surface of granular Base including clearing of road surface and spraying primer at the rate of 1.0 kg/sqm using mechanical means complete as per clause 502.)</td>
					<td>Sqm</td>
					<td>52.00</td>
					<td><input type="text" class="input" name="q22" id="q22"></td>
					<td><input type="text" class="input" name="u22" id="u22"></td>
					<td><input type="text" class="input" name="p22" id="p22"></td>
				</tr>
				<tr>
					<td>4.02</td>
					<td>503</td>
					<td>a) Providing and laying tack coat using Rapid Setting bituminous emulsion to be applied at the rate of 2.5 kg per 10 Sqm on granular surface treated with primer all complete as per Technical Specifications Clause 503.</td>
					<td>Sqm</td>
					<td>12.00</td>
					<td><input type="text" class="input" name="q23" id="q23"></td>
					<td><input type="text" class="input" name="u23" id="u23"></td>
					<td><input type="text" class="input" name="p23" id="p23"></td>
				</tr>
				<tr>
					<td></td>
					<td>503</td>
					<td>b) Providing and laying tack coat using Rapid Setting bituminous emulsion to be applied at the rate of 2.0 kg per 10 Sqm on bituminous surface all complete as per Technical Specifications Clause 503.</td>
					<td>Sqm</td>
					<td>10.00</td>
					<td><input type="text" class="input" name="q24" id="q24"></td>
					<td><input type="text" class="input" name="u24" id="u24"></td>
					<td><input type="text" class="input" name="p24" id="p24"></td>
				</tr>
				<tr>
					<td>4.03</td>
					<td>504</td>
					<td>Providing & laying Bituminous Macadam (Providing and laying dense bituminous macadam With 100-120 TPH batch type HMP producing an average output of 75 tonnes per hour using crushed aggregates of specified grading, premixed with bituminous binder and filler, transporting the hot mix to work site, laying with a hydrostatic paver. finisher with sensor control to the required grade, level and alignment, rolling with smooth wheeled, vibratory and tandem rollers to achieve the desired compaction as per MoRTH specification clause No. 504complete in all respects.) - For Grade I</td>
					<td>Cum</td>
					<td>8384.00</td>
					<td><input type="text" class="input" name="q25" id="q25"></td>
					<td><input type="text" class="input" name="u25" id="u25"></td>
					<td><input type="text" class="input" name="p25" id="p25"></td>
				</tr>
				<tr>
					<td>4.04</td>
					<td>508</td>
					<td>Providing & laying semi dense bituminous concrete with polymer modified bitumen, with 100-120 TPH batch type hot mix plant producing an average output of 75 tonnes per hour using crushed aggregates of specified grading, premixed with bituminous binder and filler, transporting the hot mix to work site, laying with a hydrostatic paver finisher With sensor control to the required grade, level and alignment, rolling with smooth wheeled, vibratory and tandem rollers to achieve the desired compaction as per MORTH specification clause No. 508complete in all respects) - For Grade I</td>
					<td>Cum</td>
					<td>9673.00</td>
					<td><input type="text" class="input" name="q26" id="q26"></td>
					<td><input type="text" class="input" name="u26" id="u26"></td>
					<td><input type="text" class="input" name="p26" id="p26"></td>
				</tr>
				<tr>
					<td>4.05</td>
					<td>602</td>
					<td>Providing and laying Pavement Quality Concrete of M-40 grade of specified thickness In Truck Laybye area as per Technical Specifications Clause 602 and as approved by Engineer.</td>
					<td>Cum</td>
					<td>8473.00</td>
					<td><input type="text" class="input" name="q27" id="q27"></td>
					<td><input type="text" class="input" name="u27" id="u27"></td>
					<td><input type="text" class="input" name="p27" id="p27"></td>
				</tr>
				<tr>
					<td>E3</td><td></td>
					<td>Construction of dry lean cement concrete Sub- base over a prepared sub-grade with coarse and fine aggregate conforming to IS: 383, the size of coarse aggregate not exceeding 25 mm, aggregate cement ratio not to exceed 15:1, aggregate gradation after blending to be as per table 600-1,clause 601. cement content not to be less than 150 kg/ Cum, optimum moisture content to be determined during trial length construction, concrete strength not to be less than 10 Mpa at 7 days.</td>
					<td>Cum</td>
					<td>3741.00</td>
					<td><input type="text" class="input" name="q28" id="q28"></td>
					<td><input type="text" class="input" name="u28" id="u28"></td>
					<td><input type="text" class="input" name="p28" id="p28"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO 5. MINOR BRIDGES & CULVERTS</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>5.01</td>
					<td>304,309 & 2903</td>
					<td>(a) Earthwork in excavation of foundation for structures In all types of soils complete as per approved drawings and Technical Specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td><input type="text" class="input" name="q29" id="q29"></td>
					<td><input type="text" class="input" name="u29" id="u29"></td>
					<td><input type="text" class="input" name="p29" id="p29"></td>
				</tr>
				<tr>
					<td>5.03</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade In Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td><input type="text" class="input" name="q30" id="q30"></td>
					<td><input type="text" class="input" name="u30" id="u30"></td>
					<td><input type="text" class="input" name="p30" id="p30"></td>
				</tr>
				<tr>
					<td>5.04 (a)</td>
					<td>1500,1700 & 2100</td>
					<td>Providing and laying Reinforced cement concrete in Foundation and Bottom Slab of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications-Clauses 1500, 1700 & 2100.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(i)M-25</td>
					<td>Cum</td>
					<td>7356.00</td>
					<td><input type="text" class="input" name="q31" id="q31"></td>
					<td><input type="text" class="input" name="u31" id="u31"></td>
					<td><input type="text" class="input" name="p31" id="p31"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(ii)M-30</td>
					<td>Cum</td>
					<td>7551.00</td>
					<td><input type="text" class="input" name="q32" id="q32"></td>
					<td><input type="text" class="input" name="u32" id="u32"></td>
					<td><input type="text" class="input" name="p32" id="p32"></td>
				</tr>
				<tr>
					<td>5.04 (b)</td>
					<td>1500,1700 & 2200</td>
					<td>Providing and laying Reinforced cement concrete in Sub-structure and Walls of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2200.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(i)M-25</td>
					<td>Cum</td>
					<td>8818.00</td>
					<td><input type="text" class="input" name="q33" id="q33"></td>
					<td><input type="text" class="input" name="u33" id="u33"></td>
					<td><input type="text" class="input" name="p33" id="p33"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(ii)M-35</td>
					<td>Cum</td>
					<td>9309.00</td>
					<td><input type="text" class="input" name="q34" id="q34"></td>
					<td><input type="text" class="input" name="u34" id="u34"></td>
					<td><input type="text" class="input" name="p34" id="p34"></td>
				</tr>
				<tr>
					<td>5.05</td>
					<td>1500,1700 & 2300</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Parapet Wall including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700 & 2300.</td>
					<td>Cum</td>
					<td>8498.00</td>
					<td><input type="text" class="input" name="q35" id="q35"></td>
					<td><input type="text" class="input" name="u35" id="u35"></td>
					<td><input type="text" class="input" name="p35" id="p35"></td>
				</tr>
				<tr>
					<td>5.06</td>
					<td>800,1500,1700 & 2703</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Crash Barrier Including reinforcement all complete as per approved drawings and Technical Specifications Sections 800, 1500, 1700 & 2703.</td>
					<td>Cum</td>
					<td>14892.00</td>
					<td><input type="text" class="input" name="q36" id="q36"></td>
					<td><input type="text" class="input" name="u36" id="u36"></td>
					<td><input type="text" class="input" name="p36" id="p36"></td>
				</tr>
				<tr>
					<td>5.08</td>
					<td>2705</td>
					<td>Supplying, providing and fixing drainage spouts for bridges as per approved drawings and Technical Specifications lause-2705.</td>
					<td>Cum</td>
					<td>740.00</td>
					<td><input type="text" class="input" name="q37" id="q37"></td>
					<td><input type="text" class="input" name="u37" id="u37"></td>
					<td><input type="text" class="input" name="p37" id="p37"></td>
				</tr>
				<tr>
					<td>5.09</td>
					<td>1500,1700 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade in Catch Pit including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700 & 2300.</td>
					<td>Cum</td>
					<td>7126.00</td>
					<td><input type="text" class="input" name="q38" id="q38"></td>
					<td><input type="text" class="input" name="u38" id="u38"></td>
					<td><input type="text" class="input" name="p38" id="p38"></td>
				</tr>
				<tr>
					<td>5.10</td>
					<td>1400</td>
					<td>Providing and Laying Course Rubble Masonry in Cement Mortar 1:3 for walls of catch pit complete as per approved drawings and Technical Specification Section 1400.</td>
					<td>Cum</td>
					<td>2919.00</td>
					<td><input type="text" class="input" name="q39" id="q39"></td>
					<td><input type="text" class="input" name="u39" id="u39"></td>
					<td><input type="text" class="input" name="p39" id="p39"></td>
				</tr>
				<tr>
					<td>5.11</td>
					<td>1312</td>
					<td>Plaster on Stone Masonry in Cement Mortar 1:3 all complete as per approved drawings and Technical Specifications Clause 1312.</td>
					<td>Sqm</td>
					<td>188.00</td>
					<td><input type="text" class="input" name="q40" id="q40"></td>
					<td><input type="text" class="input" name="u40" id="u40"></td>
					<td><input type="text" class="input" name="p40" id="p40"></td>
				</tr>
				<tr>
					<td>5.12</td>
					<td>305 & 2907</td>
					<td>Providing and laying Back fill behind abutments, wing walls and return walls with Granular Material of approved quality including all material, labour, equipment carriage etc. all complete as per approved drawings and Technical Specifications Clause 305 & 2907.</td>
					<td>Cum</td>
					<td>511.00</td>
					<td><input type="text" class="input" name="q41" id="q41"></td>
					<td><input type="text" class="input" name="u41" id="u41"></td>
					<td><input type="text" class="input" name="p41" id="p41"></td>
				</tr>
				<tr>
					<td>5.13</td>
					<td>2200 & IRC:</td>
					<td>Providing and laying Hand Packed Stones weighing not less than 70 kg for filter media behind Retaining Structures all complete as per approved drawings, technical specifications and as directed by the engineer.</td>
					<td>Cum</td>
					<td>1011.00</td>
					<td><input type="text" class="input" name="q42" id="q42"></td>
					<td><input type="text" class="input" name="u42" id="u42"></td>
					<td><input type="text" class="input" name="p42" id="p42"></td>
				</tr>
				<tr>
					<td>5.14</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in abutments, wing walls, retaining walls, return walls etc. complete as per approved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td><input type="text" class="input" name="q43" id="q43"></td>
					<td><input type="text" class="input" name="u43" id="u43"></td>
					<td><input type="text" class="input" name="p43" id="p43"></td>
				</tr>
				<tr>
					<td>5.15</td>
					<td>1600,2200 & 2300</td>
					<td>Supplying, providing, bending and placing In position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300,</td>
					<td>MT</td>
					<td>79025.00</td>
					<td><input type="text" class="input" name="q44" id="q44"></td>
					<td><input type="text" class="input" name="u44" id="u44"></td>
					<td><input type="text" class="input" name="p44" id="p44"></td>
				</tr>
				<tr>
					<td>5.18</td>
					<td>500 & 2700</td>
					<td>Providing and laying In position 65 mm thick wearing coat consisting of 25mm thick layer of mastic asphalt over 40 mm bituminous concrete over deck slab after applying prime coat complete as per approved drawings and Technical Specifications sections 500 and 2700 or as directed by the Engineer.</td>
					<td>Sqm</td>
					<td>805.00</td>
					<td><input type="text" class="input" name="q45" id="q45"></td>
					<td><input type="text" class="input" name="u45" id="u45"></td>
					<td><input type="text" class="input" name="p45" id="p45"></td>
				</tr>
				<tr>
					<td>5.19</td>
					<td>1400</td>
					<td>Providing and laying Random Rubble Masonry in Cement Mortar 1: 4 for outlet structures complete as per approved drawings and Technical Specification Section 1400.</td>
					<td>Cum</td>
					<td>2623.00</td>
					<td><input type="text" class="input" name="q46" id="q46"></td>
					<td><input type="text" class="input" name="u46" id="u46"></td>
					<td><input type="text" class="input" name="p46" id="p46"></td>
				</tr>
				<tr>
					<td>5.20</td>
					<td></td>
					<td>Painting of Structure number and span arrangement over parapet walls at CD Structure locations all complete as per approved drawings and Technical Specifications.</td>
					<td>No.</td>
					<td>148.00</td>
					<td><input type="text" class="input" name="q47" id="q47"></td>
					<td><input type="text" class="input" name="u47" id="u47"></td>
					<td><input type="text" class="input" name="p47" id="p47"></td>
				</tr>
				<tr>
					<td>5.21</td>
					<td>2704</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in approach slab including reinforcement for bridges complete as per approved drawings and Technical Specifications Clause 2704.</td>
					<td>Cum</td>
					<td>12410.00</td>
					<td><input type="text" class="input" name="q48" id="q48"></td>
					<td><input type="text" class="input" name="u48" id="u48"></td>
					<td><input type="text" class="input" name="p48" id="p48"></td>
				</tr>
				<tr>
					<td>5.22</td>
					<td>2500</td>
					<td>(a) Providing and laying Stone pitching on slopes 300mm thick for erosion protection complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>967.00</td>
					<td><input type="text" class="input" name="q49" id="q49"></td>
					<td><input type="text" class="input" name="u49" id="u49"></td>
					<td><input type="text" class="input" name="p49" id="p49"></td>
				</tr>
				<tr>
					<td></td>
					<td>2500</td>
					<td>(b) Providing and laying Filter media underneath stone pitching complete as per approved drawings and Technical specifications section 2500.</td>
					<td>Cum</td>
					<td>878.00</td>
					<td><input type="text" class="input" name="q50" id="q50"></td>
					<td><input type="text" class="input" name="u50" id="u50"></td>
					<td><input type="text" class="input" name="p50" id="p50"></td>
				</tr>
				<tr>
					<td>5.23</td>
					<td>2000 & IRC:</td>
					<td>Supplying, providing , fabricating and fixing In position true to line and level POT Cum PTFE bearings complete with all accessories as per approved drawings; Technical Specifications section 2000, IRC:83(Part III) - 2002 or as directed by the Engineer.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>S2</td>
					<td></td>
					<td>(v) For 250 Tonne capacity</td>
					<td>Nos</td>
					<td>26900.00</td>
					<td><input type="text" class="input" name="q51" id="q51"></td>
					<td><input type="text" class="input" name="u51" id="u51"></td>
					<td><input type="text" class="input" name="p51" id="p51"></td>
				</tr>
				<tr>
					<td>5.24</td>
					<td>2607</td>
					<td>Supplying, providing and fixing strip seal type expansion joint complete as per approved drawings and Technical Specifications Clause 2607.</td>
					<td>m</td>
					<td>16280.00</td>
					<td><input type="text" class="input" name="q52" id="q52"></td>
					<td><input type="text" class="input" name="u52" id="u52"></td>
					<td><input type="text" class="input" name="p52" id="p52"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>Floor Apron 450mm Thk.</td>
					<td>Cum</td>
					<td>1200.00</td>
					<td><input type="text" class="input" name="q53" id="q53"></td>
					<td><input type="text" class="input" name="u53" id="u53"></td>
					<td><input type="text" class="input" name="p53" id="p53"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>Flexible Apron, 750mm thk.</td>
					<td>Cum</td>
					<td>1400.00</td>
					<td><input type="text" class="input" name="q54" id="q54"></td>
					<td><input type="text" class="input" name="u54" id="u54"></td>
					<td><input type="text" class="input" name="p54" id="p54"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO 6. RETAINING STRUCTURES</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>6.01</td>
					<td>304,309 & 2903</td>
					<td>(a) Earthwork In excavation of foundation for structures in all types of soils complete as per approved drawings and Technical Specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td><input type="text" class="input" name="q55" id="q55"></td>
					<td><input type="text" class="input" name="u55" id="u55"></td>
					<td><input type="text" class="input" name="p55" id="p55"></td>
				</tr>
				<tr>
					<td></td>
					<td>304,309 & 2903</td>
					<td>(b) Earthwork in excavation of foundation for structures in soft /hard rock complete as per approved drawings and Technical specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>528.00</td>
					<td><input type="text" class="input" name="q56" id="q56"></td>
					<td><input type="text" class="input" name="u56" id="u56"></td>
					<td><input type="text" class="input" name="p56" id="p56"></td>
				</tr>
				<tr>
					<td>6.03</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td><input type="text" class="input" name="q57" id="q57"></td>
					<td><input type="text" class="input" name="u57" id="u57"></td>
					<td><input type="text" class="input" name="p57" id="p57"></td>
				</tr>
				<tr>
					<td>6.05</td>
					<td></td>
					<td>Providing and laying Hand Packed Stones weighing not less than 70 kg for filter media behind Retaining Structures all complete as per approved drawings, technical  specifications and as directed by the Engineer</td>
					<td>Cum</td>
					<td>1011.00</td>
					<td><input type="text" class="input" name="q58" id="q58"></td>
					<td><input type="text" class="input" name="u58" id="u58"></td>
					<td><input type="text" class="input" name="p58" id="p58"></td>
				</tr>
				<tr>
					<td>6.06</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in abutments, wing walls, retaining walls, return walls etc. complete as per approved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td><input type="text" class="input" name="q59" id="q59"></td>
					<td><input type="text" class="input" name="u59" id="u59"></td>
					<td><input type="text" class="input" name="p59" id="p59"></td>
				</tr>
				<tr>
					<td>S20</td>
					<td></td>
					<td>Providing and laying Plain cement concrete M-20 grade in Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td><input type="text" class="input" name="q60" id="q60"></td>
					<td><input type="text" class="input" name="u60" id="u60"></td>
					<td><input type="text" class="input" name="p60" id="p60"></td>
				</tr>
				<tr>
					<td>S3</td>
					<td></td>
					<td>Providing and laying M25  Reinforced cement concrete in Foundation and Bottom Slab of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2100.</td>
					<td>Cum</td>
					<td>7356.00</td>
					<td><input type="text" class="input" name="q61" id="q61"></td>
					<td><input type="text" class="input" name="u61" id="u61"></td>
					<td><input type="text" class="input" name="p61" id="p61"></td>
				</tr>
				<tr>
					<td>S4</td>
					<td></td>
					<td>Providing and laying M25 Reinforced cement concrete in Sub-structure and Walls of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2200.</td>
					<td>Cum</td>
					<td>8303.00</td>
					<td><input type="text" class="input" name="q62" id="q62"></td>
					<td><input type="text" class="input" name="u62" id="u62"></td>
					<td><input type="text" class="input" name="p62" id="p62"></td>
				</tr>
				<tr>
					<td>S5</td>
					<td></td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Crash Barrier including reinforcement all complete as per approved drawings and Technical Specifications Sections 800, 1500, 1700 & 2703.</td>
					<td>Cum</td>
					<td>14892.00</td>
					<td><input type="text" class="input" name="q63" id="q63"></td>
					<td><input type="text" class="input" name="u63" id="u63"></td>
					<td><input type="text" class="input" name="p63" id="p63"></td>
				</tr>
				<tr>
					<td>S6</td>
					<td></td>
					<td>Supplying, providing, bending and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79025.00</td>
					<td><input type="text" class="input" name="q64" id="q64"></td>
					<td><input type="text" class="input" name="u64" id="u64"></td>
					<td><input type="text" class="input" name="p64" id="p64"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO.7. DRAINAGE</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>7.01</td>
					<td>301</td>
					<td>Earthwork in excavation necessary for construction of roadway in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td><input type="text" class="input" name="q65" id="q65"></td>
					<td><input type="text" class="input" name="u65" id="u65"></td>
					<td><input type="text" class="input" name="p65" id="p65"></td>
				</tr>
				<tr>
					<td>S18</td>
					<td>301</td>
					<td>(a)Earthwork in excavation necessary for construction of Irrigation canal in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>84.00</td>
					<td><input type="text" class="input" name="q66" id="q66"></td>
					<td><input type="text" class="input" name="u66" id="u66"></td>
					<td><input type="text" class="input" name="p66" id="p66"></td>
				</tr>
				<tr>
					<td>S19</td>
					<td>301</td>
					<td>(b) Excavation of ordinary /hard rock in hilly area necessary for construction of irrigation canal by mechanical means Including cutting and trimming of side slopes and disposal of cut material with all lifts and lead and all complete as per Technical Specifications CI.301.</td>
					<td>Cum</td>
					<td>276.00</td>
					<td><input type="text" class="input" name="q67" id="q67"></td>
					<td><input type="text" class="input" name="u67" id="u67"></td>
					<td><input type="text" class="input" name="p67" id="p67"></td>
				</tr>
				<tr>
					<td>7.03</td>
					<td>1500 & 1700</td>
					<td>Construction of semi-circular drainage chute in cement concrete M-15 with foundation concrete as per approved drawings and Technical Specifications Sections 1500 and 1700 including construction of bell mouth at entry.</td>
					<td>m</td>
					<td>814.00</td>
					<td><input type="text" class="input" name="q68" id="q68"></td>
					<td><input type="text" class="input" name="u68" id="u68"></td>
					<td><input type="text" class="input" name="p68" id="p68"></td>
				</tr>
				<tr>
					<td>7.04</td>
					<td>1500 & 1700</td>
					<td>Construction of energy dissipation basin and sumps in M-15 as per approved drawings and Technical Specifications Section 1500 & 1700.</td>
					<td>No.</td>
					<td>37000.00</td>
					<td><input type="text" class="input" name="q69" id="q69"></td>
					<td><input type="text" class="input" name="u69" id="u69"></td>
					<td><input type="text" class="input" name="p69" id="p69"></td>
				</tr>
				<tr>
					<td>7.05</td>
					<td>2500</td>
					<td>(a) Providing and laying Stone pitching on slopes 300mm thick for erosion protection complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>967.00</td>
					<td><input type="text" class="input" name="q70" id="q70"></td>
					<td><input type="text" class="input" name="u70" id="u70"></td>
					<td><input type="text" class="input" name="p70" id="p70"></td>
				</tr>
				<tr>
					<td></td>
					<td>2500</td>
					<td>(b) Providing and laying Filter media underneath stone pitching complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>878.00</td>
					<td><input type="text" class="input" name="q71" id="q71"></td>
					<td><input type="text" class="input" name="u71" id="u71"></td>
					<td><input type="text" class="input" name="p71" id="p71"></td>
				</tr>
				<tr>
					<td>7.07</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in levelling course below Drain bottom and Pipe Culverts including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700,</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td><input type="text" class="input" name="q72" id="q72"></td>
					<td><input type="text" class="input" name="u72" id="u72"></td>
					<td><input type="text" class="input" name="p72" id="p72"></td>
				</tr>
				<tr>
					<td>7.12</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade for Open lined trapezoidal drains Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td><input type="text" class="input" name="q73" id="q73"></td>
					<td><input type="text" class="input" name="u73" id="u73"></td>
					<td><input type="text" class="input" name="p73" id="p73"></td>
				</tr>
				<tr>
					<td>7.13</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in side drains complete as preapproved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td><input type="text" class="input" name="q74" id="q74"></td>
					<td><input type="text" class="input" name="u74" id="u74"></td>
					<td><input type="text" class="input" name="p74" id="p74"></td>
				</tr>
				<tr>
					<td>7.15</td>
					<td>1400</td>
					<td>Providing and Laying Course Rubble Masonry In Cement Mortar 1:3 for walls of covered drain at Truck Lay Bye location complete as per approved drawings and Technical Specification Section 1400</td>
					<td>Cum</td>
					<td>30.00</td>
					<td><input type="text" class="input" name="q75" id="q75"></td>
					<td><input type="text" class="input" name="u75" id="u75"></td>
					<td><input type="text" class="input" name="p75" id="p75"></td>
				</tr>
				<tr>
					<td>7.16</td>
					<td>1312</td>
					<td>Pointing on Stone Masonry in Cement Mortar 1;3 all complete as per approved drawings and Technical Specifications Clause 1312.</td>
					<td>sq,m.</td>
					<td>30.00</td>
					<td><input type="text" class="input" name="q76" id="q76"></td>
					<td><input type="text" class="input" name="u76" id="u76"></td>
					<td><input type="text" class="input" name="p76" id="p76"></td>
				</tr>
				<tr>
					<td>7.17</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-20 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 .</td>
					<td>Cum</td>
					<td>8646.00</td>
					<td><input type="text" class="input" name="q77" id="q77"></td>
					<td><input type="text" class="input" name="u77" id="u77"></td>
					<td><input type="text" class="input" name="p77" id="p77"></td>
				</tr>
				<tr>
					<td>S7</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-25 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 .</td>
					<td>Cum</td>
					<td>8818.00</td>
					<td><input type="text" class="input" name="q78" id="q78"></td>
					<td><input type="text" class="input" name="u78" id="u78"></td>
					<td><input type="text" class="input" name="p78" id="p78"></td>
				</tr>
				<tr>
					<td>S9</td>
					<td></td>
					<td>Supplying, providing, bending  and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79205.00</td>
					<td><input type="text" class="input" name="q79" id="q79"></td>
					<td><input type="text" class="input" name="u79" id="u79"></td>
					<td><input type="text" class="input" name="p79" id="p79"></td>
				</tr>
				<tr>
					<td>S10</td>
					<td>301</td>
					<td>Earthwork in excavation necessary for construction of roadway in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td><input type="text" class="input" name="q80" id="q80"></td>
					<td><input type="text" class="input" name="u80" id="u80"></td>
					<td><input type="text" class="input" name="p80" id="p80"></td>
				</tr>
				<tr>
					<td>S11</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in levelling course below Drain bottom and Pipe Culverts including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700,</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td><input type="text" class="input" name="q81" id="q81"></td>
					<td><input type="text" class="input" name="u81" id="u81"></td>
					<td><input type="text" class="input" name="p81" id="p81"></td>
				</tr>
				<tr>
					<td>S13</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade for Open lined trapezoidal drains Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300, ..</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td><input type="text" class="input" name="q82" id="q82"></td>
					<td><input type="text" class="input" name="u82" id="u82"></td>
					<td><input type="text" class="input" name="p82" id="p82"></td>
				</tr>
				<tr>
					<td>S14</td>
					<td></td>
					<td>Supplying, providing, bending and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79025.00</td>
					<td><input type="text" class="input" name="q83" id="q83"></td>
					<td><input type="text" class="input" name="u83" id="u83"></td>
					<td><input type="text" class="input" name="p83" id="p83"></td>
				</tr>
				<tr>
					<td>S15</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-25 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 </td>
					<td>Cum</td>
					<td>8818.00</td>
					<td><input type="text" class="input" name="q84" id="q84"></td>
					<td><input type="text" class="input" name="u84" id="u84"></td>
					<td><input type="text" class="input" name="p84" id="p84"></td>
				</tr>
				<tr>
					<td>S16</td>
					<td>2718</td>
					<td>Making, providing and fixing weep holes in side drains complete as preapproved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>298.00</td>
					<td><input type="text" class="input" name="q85" id="q85"></td>
					<td><input type="text" class="input" name="u85" id="u85"></td>
					<td><input type="text" class="input" name="p85" id="p85"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO. 8. JUNCTIONS AND TRAFFIC SAFETY</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>8.01</td>
					<td>409</td>
					<td>Providing and laying 38 mm thick precast cement concrete Paving tiles as per approved drawings and Technical Specifications Clause 409.</td>
					<td>sq,m.</td>
					<td>506.00</td>
					<td><input type="text" class="input" name="q86" id="q86"></td>
					<td><input type="text" class="input" name="u86" id="u86"></td>
					<td><input type="text" class="input" name="p86" id="p86"></td>
				</tr>
				<tr>
					<td>8.02</td>
					<td>408</td>
					<td>Providing and laying 38 mm thick precast cement concrete Paving tiles as per approved drawings and Technical Specifications Clause 409.</td>
					<td>m</td>
					<td>654.00</td>
					<td><input type="text" class="input" name="q87" id="q87"></td>
					<td><input type="text" class="input" name="u87" id="u87"></td>
					<td><input type="text" class="input" name="p87" id="p87"></td>
				</tr>
				<tr>
					<td>S17</td>
					<td>1500,1700 ,2100 & 2200</td>
					<td>Providing and laying Plain cement concrete M-20 grade for foundation of metallic crash barrier Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td><input type="text" class="input" name="q88" id="q88"></td>
					<td><input type="text" class="input" name="u88" id="u88"></td>
					<td><input type="text" class="input" name="p88" id="p88"></td>
				</tr>
				<tr>
					<td>8.03</td>
					<td></td>
					<td>Constructing speed breaker complete as per drawing and at the location as directed by the Engineer.</td>
					<td>m</td>
					<td>1480.00</td>
					<td><input type="text" class="input" name="q89" id="q89"></td>
					<td><input type="text" class="input" name="u89" id="u89"></td>
					<td><input type="text" class="input" name="p89" id="p89"></td>
				</tr>
				<tr>
					<td>8.04</td>
					<td>810</td>
					<td>Providing and fixing single metal beam crash barrier complete as per approved drawings and Technical Specifications Clause 810:</td>
					<td>m</td>
					<td>2451.00</td>
					<td><input type="text" class="input" name="q90" id="q90"></td>
					<td><input type="text" class="input" name="u90" id="u90"></td>
					<td><input type="text" class="input" name="p90" id="p90"></td>
				</tr>
				<tr>
					<td>8.05</td>
					<td></td>
					<td>Providing and fixing M-20 guard post as per approved drawings & Technical Specifications</td>
					<td>No.</td>
					<td>709.00</td>
					<td><input type="text" class="input" name="q91" id="q91"></td>
					<td><input type="text" class="input" name="u91" id="u91"></td>
					<td><input type="text" class="input" name="p91" id="p91"></td>
				</tr>
				<tr>
					<td>8.06</td>
					<td>300,808, 1500,1700 & 1900</td>
					<td>Providing, fixing and erecting pedestrian railing at passenger shelter including foundation concrete and painting with approved paint complete as per approved drawing and technical specification clause808 and sections 300, 1500, 1700 & 1900</td>
					<td>m</td>
					<td>1776.00</td>
					<td><input type="text" class="input" name="q92" id="q92"></td>
					<td><input type="text" class="input" name="u92" id="u92"></td>
					<td><input type="text" class="input" name="p92" id="p92"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>Bill No. 9 TRAFFIC SIGNS MARKING AND OTHER APPURTENANCES</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>9.01</td>
					<td>800</td>
					<td>Providing and fixing reinforced cement concrete stones Including excavation, foundation concrete, reinforcement and Inscription etc. all complete as per approved drawings Technical Specifications Section800.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>i) Boundary stones.</td>
					<td>No.</td>
					<td>2836.00</td>
					<td><input type="text" class="input" name="q93" id="q93"></td>
					<td><input type="text" class="input" name="u93" id="u93"></td>
					<td><input type="text" class="input" name="p93" id="p93"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>ii) 5th km, stone</td>
					<td>No.</td>
					<td>4070.00</td>
					<td><input type="text" class="input" name="q94" id="q94"></td>
					<td><input type="text" class="input" name="u94" id="u94"></td>
					<td><input type="text" class="input" name="p94" id="p94"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>iii) Km, stone</td>
					<td>No.</td>
					<td>2569.00</td>
					<td><input type="text" class="input" name="q95" id="q95"></td>
					<td><input type="text" class="input" name="u95" id="u95"></td>
					<td><input type="text" class="input" name="p95" id="p95"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>iv) Hectometre stone</td>
					<td>No.</td>
					<td>336.00</td>
					<td><input type="text" class="input" name="q96" id="q96"></td>
					<td><input type="text" class="input" name="u96" id="u96"></td>
					<td><input type="text" class="input" name="p96" id="p96"></td>
				</tr>
				<tr>
					<td>9.02</td>
					<td>803</td>
					<td>Pavement marking with hot applied thermoplastic paints conforming to ASTM D36/BS-3262 (Part - I) as per approved drawings and Technical Specifications Clause 803.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>a) Lane/centre line/edge line/ transverse marking, Pedestrian Crossing and any other markings,</td>
					<td>sq,m.</td>
					<td>444.00</td>
					<td><input type="text" class="input" name="q97" id="q97"></td>
					<td><input type="text" class="input" name="u97" id="u97"></td>
					<td><input type="text" class="input" name="p97" id="p97"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>b) Directional Arrows, lettering etc. as per Drg. No. 61 of MOST Type “Design for Inter-sections on National Highways".</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(i) RM 13</td>
					<td>No.</td>
					<td>259.00</td>
					<td><input type="text" class="input" name="q98" id="q98"></td>
					<td><input type="text" class="input" name="u98" id="u98"></td>
					<td><input type="text" class="input" name="p98" id="p98"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(ii) RM 16 & 17</td>
					<td>No.</td>
					<td>296.00</td>
					<td><input type="text" class="input" name="q99" id="q99"></td>
					<td><input type="text" class="input" name="u99" id="u99"></td>
					<td><input type="text" class="input" name="p99" id="p99"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(iii) Lettering</td>
					<td>No.</td>
					<td>148.00</td>
					<td><input type="text" class="input" name="q100" id="q100"></td>
					<td><input type="text" class="input" name="u100" id="u100"></td>
					<td><input type="text" class="input" name="p100" id="p100"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(iv) Chevron Marking</td>
					<td>sq,m.</td>
					<td>370.00</td>
					<td><input type="text" class="input" name="q101" id="q101"></td>
					<td><input type="text" class="input" name="u101" id="u101"></td>
					<td><input type="text" class="input" name="p101" id="p101"></td>
				</tr>
				<tr>
					<td>9.03</td>
					<td>801</td>
					<td>Supplying and fixing at site retro-reflectorised type sign boards/signs Including definition plates all complete as per approved drawings and Technical specifications clause 801.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>(a) Informatory Signs, Facility Signs, Direction Signs, Advance Direction/ Destination Signs, Route Marker Skins etc.</td>
					<td>sq,m.</td>
					<td>6660.00</td>
					<td><input type="text" class="input" name="q102" id="q102"></td>
					<td><input type="text" class="input" name="u102" id="u102"></td>
					<td><input type="text" class="input" name="p102" id="p102"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>b) Cautionary Signs, Triangular (Size 900 mm side).</td>
					<td>No.</td>
					<td>5090.00</td>
					<td><input type="text" class="input" name="q103" id="q103"></td>
					<td><input type="text" class="input" name="u103" id="u103"></td>
					<td><input type="text" class="input" name="p103" id="p103"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>i) Circular 600 mm dia.</td>
					<td>No.</td>
					<td>4027.00</td>
					<td><input type="text" class="input" name="q104" id="q104"></td>
					<td><input type="text" class="input" name="u104" id="u104"></td>
					<td><input type="text" class="input" name="p104" id="p104"></td>
				</tr>
				<tr>
					<td>9.04</td>
					<td>805</td>
					<td>Providing and fixing retro-reflectorised Road delineators complete as per approved drawings and Technical Specifications Clause 805.</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>a) Roadway Delineator</td>
					<td>No.</td>
					<td>444.00</td>
					<td><input type="text" class="input" name="q105" id="q105"></td>
					<td><input type="text" class="input" name="u105" id="u105"></td>
					<td><input type="text" class="input" name="p105" id="p105"></td>
				</tr>
				<tr>
					<td>9.05</td>
					<td></td>
					<td>Providing and fixing road side reflective road stud 100mm X 100mm as per Technical Specifications.</td>
					<td>No.</td>
					<td>370.00</td>
					<td><input type="text" class="input" name="q106" id="q106"></td>
					<td><input type="text" class="input" name="u106" id="u106"></td>
					<td><input type="text" class="input" name="p106" id="p106"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>Bill No. 10  MISCELLANEOUS</td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>10.01</td>
					<td></td>
					<td>Bill No. 10  MISCELLANEOUS</td>
					<td>No.</td>
					<td>148000.00</td>
					<td><input type="text" class="input" name="q107" id="q107"></td>
					<td><input type="text" class="input" name="u107" id="u107"></td>
					<td><input type="text" class="input" name="p107" id="p107"></td>
				</tr>
				<tr>
					<td>10.02</td>
					<td></td>
					<td>Painting with synthetic enamel paint on kerb at Bus Bay and Truck Laybye location complete as per approved drawings, technical specification and as directed by Engineer.</td>
					<td>sq,m.</td>
					<td>81.00</td>
					<td><input type="text" class="input" name="q108" id="q108"></td>
					<td><input type="text" class="input" name="u108" id="u108"></td>
					<td><input type="text" class="input" name="p108" id="p108"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td>BILL NO.11. LANDSLIDE </td>
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>E4</td>
					<td></td>
					<td>Land slide removal .</td>
					<td>Cum</td>
					<td>84.00</td>
					<td><input type="text" class="input" name="q109" id="q109"></td>
					<td><input type="text" class="input" name="u109" id="u109"></td>
					<td><input type="text" class="input" name="p109" id="p109"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td colspan='4'>Total Work Done</td>
					<td><input type="text" class="input" name="u110" id="u110"></td>
					<td><input type="text" class="input" name="p110" id="p110"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td colspan='4'>Total value of work  done upto-date (A)………</td>
					<td><input type="text" class="input" name="u111" id="u111"></td>
					<td><input type="text" class="input" name="p111" id="p111"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td colspan='4'>Rebate @ 5% on (A)</td>
					<td><input type="text" class="input" name="u112" id="u112"></td>
					<td><input type="text" class="input" name="p112" id="p112"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td colspan='4'>TOTAL</td>
					<td><input type="text" class="input" name="u113" id="u113"></td>
					<td><input type="text" class="input" name="p113" id="p113"></td>
				</tr>
			</table>
			<p align="center"><a href="#" onclick="cal()"><i class="fa fa-calculator"></i>CALCULATE</a></p>
			<p align="center"><button class="btn"><i class="fa fa-download"></i>SAVE</button></p>
		</form>
		<script>
			function cal()
			{
				var n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12,n13,n14,n15,n16,n17,n18,n19,n20,n21,n22,n23,n24,n25,n26,n27,n28,n29,n30,n31,n32,n33,n34,n35,n36,n37,n38,n39,n40,n41,n42,n43,n44,n45,n46,n47,n48,n49,n50,n51,n52,n53,n54,n55,n56,n57,n58,n59,n60,n61,n62,n63,n64,n65,n66,n67,n68,n69,n70,n71,n72,n73,n74,n75,n76,n77,n78,n79,n80,n81,n82,n83,n84,n85,n86,n87,n88,n89,n90,n91,n92,n93,n94,n95,n96,n97,n98,n99,n100,n101,n102,n103,n104,n105,n106,n107,n108,n109,
					s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11,s12,s13,s14,s15,s16,s17,s18,s19,s20,s21,s22,s23,s24,s25,s26,s27,s28,s29,s30,s31,s32,s33,s34,s35,s36,s37,s38,s39,s40,s41,s42,s43,s44,s45,s46,s47,s48,s49,s50,s51,s52,s53,s54,s55,s56,s57,s58,s59,s60,s61,s62,s63,s64,s65,s66,s67,s68,s69,s70,s71,s72,s73,s74,s75,s76,s77,s78,s79,s80,s81,s82,s83,s84,s85,s86,s87,s88,s89,s90,s91,s92,s93,s94,s95,s96,s97,s98,s99,s100,s101,s102,s103,s104,s105,s106,s107,s108,s109,s110,s111,s112,s113,
					m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,m11,m12,m13,m14,m15,m16,m17,m18,m19,m20,m21,m22,m23,m24,m25,m26,m27,m28,m29,m30,m31,m32,m33,m34,m35,m36,m37,m38,m39,m40,m41,m42,m43,m44,m45,m46,m47,m48,m49,m50,m51,m52,m53,m54,m55,m56,m57,m58,m59,m60,m61,m62,m63,m64,m65,m66,m67,m68,m69,m70,m71,m72,m73,m74,m75,m76,m77,m78,m79,m80,m81,m82,m83,m84,m85,m86,m87,m88,m89,m90,m91,m92,m93,m94,m95,m96,m97,m98,m99,m100,m101,m102,m103,m104,m105,m106,m107,m108,m109;
				n1=parseInt(document.getElementById("q1").value);
				s1=n1*37000.00;
				document.getElementById("u1").value=s1;
				n2=parseInt(document.getElementById("q2").value);
				s2=n2*148.00;
				document.getElementById("u2").value=s2;
				n3=parseInt(document.getElementById("q3").value);
				s3=n3*592.00;
				document.getElementById("u3").value=s3;
				n4=parseInt(document.getElementById("q4").value);
				s4=n4*148.00;
				document.getElementById("u4").value=s4;
				n5=parseInt(document.getElementById("q5").value);
				s5=n5*296.00;
				document.getElementById("u5").value=s5;
				n6=parseInt(document.getElementById("q6").value);
				s6=n6*222.00;
				document.getElementById("u6").value=s6;
				n7=parseInt(document.getElementById("q7").value);
				s7=n7*666.00;
				document.getElementById("u7").value=s7;
				n8=parseInt(document.getElementById("q8").value);
				s8=n8*1184.00;
				document.getElementById("u8").value=s8;
				n9=parseInt(document.getElementById("q9").value);
				s9=n9*2960.00;
				document.getElementById("u9").value=s9;
				n10=parseInt(document.getElementById("q10").value);
				s10=n10*6660.00;
				document.getElementById("u10").value=s10;
				n11=parseInt(document.getElementById("q11").value);
				s11=n11*84.00;
				document.getElementById("u11").value=s11;
				n12=parseInt(document.getElementById("q12").value);
				s12=n12*276.00;
				document.getElementById("u12").value=s12;
				n13=parseInt(document.getElementById("q13").value);
				s13=n13*71.00;
				document.getElementById("u13").value=s13;
				n14=parseInt(document.getElementById("q14").value);
				s14=n14*1122.00;
				document.getElementById("u14").value=s14;
				n15=parseInt(document.getElementById("q15").value);
				s15=n15*41.00;
				document.getElementById("u15").value=s15;
				n16=parseInt(document.getElementById("q16").value);
				s16=n16*44.00;
				document.getElementById("u16").value=s16;
				n17=parseInt(document.getElementById("q17").value);
				s17=n17*220.00;
				document.getElementById("u17").value=s17;
				n18=parseInt(document.getElementById("q18").value);
				s18=n18*25.00;
				document.getElementById("u18").value=s18;
				n19=parseInt(document.getElementById("q19").value);
				s19=n19*72.00;
				document.getElementById("u19").value=s19;
				n20=parseInt(document.getElementById("q20").value);
				s20=n20*1122.00;
				document.getElementById("u20").value=s20;
				n21=parseInt(document.getElementById("q21").value);
				s21=n21*1871.00;
				document.getElementById("u21").value=s21;
				n22=parseInt(document.getElementById("q22").value);
				s22=n22*52.00;
				document.getElementById("u22").value=s22;
				n23=parseInt(document.getElementById("q23").value);
				s23=n23*12.00;
				document.getElementById("u23").value=s23;
				n24=parseInt(document.getElementById("q24").value);
				s24=n24*10.00;
				document.getElementById("u24").value=s24;
				n25=parseInt(document.getElementById("q25").value);
				s25=n25*8384.00;
				document.getElementById("u25").value=s25;
				n26=parseInt(document.getElementById("q26").value);
				s26=n26*9673.00;
				document.getElementById("u26").value=s26;
				n27=parseInt(document.getElementById("q27").value);
				s27=n27*8473.00;
				document.getElementById("u27").value=s27;
				n28=parseInt(document.getElementById("q28").value);
				s28=n28*3741.00;
				document.getElementById("u28").value=s28;
				n29=parseInt(document.getElementById("q29").value);
				s29=n29*99.00;
				document.getElementById("u29").value=s29;
				n30=parseInt(document.getElementById("q30").value);
				s30=n30*5620.00;
				document.getElementById("u30").value=s30;
				n31=parseInt(document.getElementById("q31").value);
				s31=n31*7356.00;
				document.getElementById("u31").value=s31;
				n32=parseInt(document.getElementById("q32").value);
				s32=n32*7551.00;
				document.getElementById("u32").value=s32;
				n33=parseInt(document.getElementById("q33").value);
				s33=n33*8818.00;
				document.getElementById("u33").value=s33;
				n34=parseInt(document.getElementById("q34").value);
				s34=n34*9309.00;
				document.getElementById("u34").value=s34;
				n35=parseInt(document.getElementById("q35").value);
				s35=n35*8494.00;
				document.getElementById("u35").value=s35;
				n36=parseInt(document.getElementById("q36").value);
				s36=n36*14892.00;
				document.getElementById("u36").value=s36;
				n37=parseInt(document.getElementById("q37").value);
				s37=n37*740.00;
				document.getElementById("u37").value=s37;
				n38=parseInt(document.getElementById("q38").value);
				s38=n38*7126.00;
				document.getElementById("u38").value=s38;
				n39=parseInt(document.getElementById("q39").value);
				s39=n39*2919.00;
				document.getElementById("u39").value=s39;
				n40=parseInt(document.getElementById("q40").value);
				s40=n40*188.00;
				document.getElementById("u40").value=s40;
				n41=parseInt(document.getElementById("q41").value);
				s41=n41*511.00;
				document.getElementById("u41").value=s41;
				n42=parseInt(document.getElementById("q42").value);
				s42=n42*1011.00;
				document.getElementById("u42").value=s42;
				n43=parseInt(document.getElementById("q43").value);
				s43=n43*296.00;
				document.getElementById("u43").value=s43;
				n44=parseInt(document.getElementById("q44").value);
				s44=n44*79025.00;
				document.getElementById("u44").value=s44;
				n45=parseInt(document.getElementById("q45").value);
				s45=n45*805.00;
				document.getElementById("u45").value=s45;
				n46=parseInt(document.getElementById("q46").value);
				s46=n46*2623.00;
				document.getElementById("u46").value=s46;
				n47=parseInt(document.getElementById("q47").value);
				s47=n47*148.00;
				document.getElementById("u47").value=s47;
				n48=parseInt(document.getElementById("q48").value);
				s48=n48*12410.00;
				document.getElementById("u48").value=s48;
				n49=parseInt(document.getElementById("q49").value);
				s49=n49*967.00;
				document.getElementById("u49").value=s49;
				n50=parseInt(document.getElementById("q50").value);
				s50=n50*878.00;
				document.getElementById("u50").value=s50;
				n51=parseInt(document.getElementById("q51").value);
				s51=n51*26900.00;
				document.getElementById("u51").value=s51;
				n52=parseInt(document.getElementById("q52").value);
				s52=n52*16280.00;
				document.getElementById("u52").value=s52;
				n53=parseInt(document.getElementById("q53").value);
				s53=n53*1200.00;
				document.getElementById("u53").value=s53;
				n54=parseInt(document.getElementById("q54").value);
				s54=n54*1400.00;
				document.getElementById("u54").value=s54;
				n55=parseInt(document.getElementById("q55").value);
				s55=n55*99.00;
				document.getElementById("u55").value=s55;
				n56=parseInt(document.getElementById("q56").value);
				s56=n56*528.00;
				document.getElementById("u56").value=s56;
				n57=parseInt(document.getElementById("q57").value);
				s57=n57*5620.00;
				document.getElementById("u57").value=s57;
				n58=parseInt(document.getElementById("q58").value);
				s58=n58*1011.00;
				document.getElementById("u58").value=s58;
				n59=parseInt(document.getElementById("q59").value);
				s59=n59*296.00;
				document.getElementById("u59").value=s59;
				n60=parseInt(document.getElementById("q60").value);
				s60=n60*7166.00;
				document.getElementById("u60").value=s60;
				n61=parseInt(document.getElementById("q61").value);
				s61=n61*7356.00;
				document.getElementById("u61").value=s61;
				n62=parseInt(document.getElementById("q62").value);
				s62=n62*8303.00;
				document.getElementById("u62").value=s62;
				n63=parseInt(document.getElementById("q63").value);
				s63=n63*14892.00;
				document.getElementById("u63").value=s63;
				n64=parseInt(document.getElementById("q64").value);
				s64=n64*79025.00;
				document.getElementById("u64").value=s64;
				n65=parseInt(document.getElementById("q65").value);
				s65=n65*99.00;
				document.getElementById("u65").value=s65;
				n66=parseInt(document.getElementById("q66").value);
				s66=n66*84.00;
				document.getElementById("u66").value=s66;
				n67=parseInt(document.getElementById("q67").value);
				s67=n67*276.00;
				document.getElementById("u67").value=s67;
				n68=parseInt(document.getElementById("q68").value);
				s68=n68*814.00;
				document.getElementById("u68").value=s68;
				n69=parseInt(document.getElementById("q69").value);
				s69=n69*37000.00;
				document.getElementById("u69").value=s69;
				n70=parseInt(document.getElementById("q70").value);
				s70=n70*967.00;
				document.getElementById("u70").value=s70;
				n71=parseInt(document.getElementById("q71").value);
				s71=n71*878.00;
				document.getElementById("u71").value=s71;
				n72=parseInt(document.getElementById("q72").value);
				s72=n72*5620.00;
				document.getElementById("u72").value=s72;
				n73=parseInt(document.getElementById("q73").value);
				s73=n73*7166.00;
				document.getElementById("u73").value=s73;
				n74=parseInt(document.getElementById("q74").value);
				s74=n74*296.00;
				document.getElementById("u74").value=s74;
				n75=parseInt(document.getElementById("q75").value);
				s75=n75*30.00;
				document.getElementById("u75").value=s75;
				n76=parseInt(document.getElementById("q76").value);
				s76=n76*30.00;
				document.getElementById("u76").value=s76;
				n77=parseInt(document.getElementById("q77").value);
				s77=n77*8646.00;
				document.getElementById("u77").value=s77;
				n78=parseInt(document.getElementById("q78").value);
				s78=n78*8818.00;
				document.getElementById("u78").value=s78;
				n79=parseInt(document.getElementById("q79").value);
				s79=n79*79205.00;
				document.getElementById("u79").value=s79;
				n80=parseInt(document.getElementById("q80").value);
				s80=n80*99.00;
				document.getElementById("u80").value=s80;
				n81=parseInt(document.getElementById("q81").value);
				s81=n81*5620.00;
				document.getElementById("u81").value=s81;
				n82=parseInt(document.getElementById("q82").value);
				s82=n82*7166.00;
				document.getElementById("u82").value=s82;
				n83=parseInt(document.getElementById("q83").value);
				s83=n83*79025.00;
				document.getElementById("u83").value=s83;
				n84=parseInt(document.getElementById("q84").value);
				s84=n84*8818.00;
				document.getElementById("u84").value=s84;
				n85=parseInt(document.getElementById("q85").value);
				s85=n85*298.00;
				document.getElementById("u85").value=s85;
				n86=parseInt(document.getElementById("q86").value);
				s86=n86*506.00;
				document.getElementById("u86").value=s86;
				n87=parseInt(document.getElementById("q87").value);
				s87=n87*654.00;
				document.getElementById("u87").value=s87;
				n88=parseInt(document.getElementById("q88").value);
				s88=n88*7166.00;
				document.getElementById("u88").value=s88;
				n89=parseInt(document.getElementById("q89").value);
				s89=n89*1480.00;
				document.getElementById("u89").value=s89;
				n90=parseInt(document.getElementById("q90").value);
				s90=n90*2451.00;
				document.getElementById("u90").value=s90;
				n91=parseInt(document.getElementById("q91").value);
				s91=n91*709.00;
				document.getElementById("u91").value=s91;
				n92=parseInt(document.getElementById("q92").value);
				s92=n92*1776.00;
				document.getElementById("u92").value=s92;
				n93=parseInt(document.getElementById("q93").value);
				s93=n93*2836.00;
				document.getElementById("u93").value=s93;
				n94=parseInt(document.getElementById("q94").value);
				s94=n94*4070.00;
				document.getElementById("u94").value=s94;
				n95=parseInt(document.getElementById("q95").value);
				s95=n95*2569.00;
				document.getElementById("u95").value=s95;
				n96=parseInt(document.getElementById("q96").value);
				s96=n96*336.00;
				document.getElementById("u96").value=s96;
				n97=parseInt(document.getElementById("q97").value);
				s97=n97*444.00;
				document.getElementById("u97").value=s97;
				n98=parseInt(document.getElementById("q98").value);
				s98=n98*259.00;
				document.getElementById("u98").value=s98;
				n99=parseInt(document.getElementById("q99").value);
				s99=n99*269.00;
				document.getElementById("u99").value=s99;
				n100=parseInt(document.getElementById("q100").value);
				s100=n100*148.00;
				document.getElementById("u100").value=s100;
				n101=parseInt(document.getElementById("q101").value);
				s101=n101*370.00;
				document.getElementById("u101").value=s101;
				n102=parseInt(document.getElementById("q102").value);
				s102=n102*6660.00;
				document.getElementById("u102").value=s102;
				n103=parseInt(document.getElementById("q103").value);
				s103=n103*5090.00;
				document.getElementById("u103").value=s103;
				n104=parseInt(document.getElementById("q104").value);
				s104=n104*2027.00;
				document.getElementById("u104").value=s104;
				n105=parseInt(document.getElementById("q105").value);
				s105=n105*444.00;
				document.getElementById("u105").value=s105;
				n106=parseInt(document.getElementById("q106").value);
				s106=n106*370.00;
				document.getElementById("u106").value=s106;
				n107=parseInt(document.getElementById("q107").value);
				s107=n107*148000.00;
				document.getElementById("u107").value=s107;
				n108=parseInt(document.getElementById("q108").value);
				s108=n108*81.00;
				document.getElementById("u108").value=s108;
				n109=parseInt(document.getElementById("q109").value);
				s109=n109*84.00;
				document.getElementById("u109").value=s109;
				s110=s1+s2+s3+s4+s5+s6+s7+s8+s9+s10+s11+s12+s13+s14+s15+s16+s17+s18+s19+s20+s21+s22+s23+s24+s25+s26+s27+s28+s29+s30+s31+s32+s33+s34+s35+s36+s37+s38+s39+s40+s41+s42+s43+s44+s45+s46+s47+s48+s49+s50+s51+s52+s53+s54+s55+s56+s57+s58+s59+s60+s61+s62+s63+s64+s65+s66+s67+s68+s69+s70+s81+s82+s83+s84+s85+s86+s87+s88+s89+s90+s91+s92+s93+s94+s95+s96+s97+s98+s99+s100+s101+s102+s103+s104+s105+s106+s107+s108+s109;
				document.getElementById("u110").value=s110;
				document.getElementById("u111").value=s110;
				s111=s110*5/100;
				document.getElementById("u112").value=s111;
				m1=parseInt(document.getElementById("p1").value);
				m2=parseInt(document.getElementById("p2").value);
				m3=parseInt(document.getElementById("p3").value);
				m4=parseInt(document.getElementById("p4").value);
				m5=parseInt(document.getElementById("p5").value);
				m6=parseInt(document.getElementById("p6").value);
				m7=parseInt(document.getElementById("p7").value);
				m8=parseInt(document.getElementById("p8").value);
				m9=parseInt(document.getElementById("p9").value);
				m10=parseInt(document.getElementById("p10").value);
				m11=parseInt(document.getElementById("p11").value);
				m12=parseInt(document.getElementById("p12").value);
				m13=parseInt(document.getElementById("p13").value);
				m14=parseInt(document.getElementById("p14").value);
				m15=parseInt(document.getElementById("p15").value);
				m16=parseInt(document.getElementById("p16").value);
				m17=parseInt(document.getElementById("p17").value);
				m18=parseInt(document.getElementById("p18").value);
				m19=parseInt(document.getElementById("p19").value);
				m20=parseInt(document.getElementById("p20").value);
				m21=parseInt(document.getElementById("p21").value);
				m22=parseInt(document.getElementById("p22").value);
				m23=parseInt(document.getElementById("p23").value);
				m24=parseInt(document.getElementById("p24").value);
				m25=parseInt(document.getElementById("p25").value);
				m26=parseInt(document.getElementById("p26").value);
				m27=parseInt(document.getElementById("p27").value);
				m28=parseInt(document.getElementById("p28").value);
				m29=parseInt(document.getElementById("p29").value);
				m30=parseInt(document.getElementById("p30").value);
				m31=parseInt(document.getElementById("p31").value);
				m32=parseInt(document.getElementById("p32").value);
				m33=parseInt(document.getElementById("p33").value);
				m34=parseInt(document.getElementById("p34").value);
				m35=parseInt(document.getElementById("p35").value);
				m36=parseInt(document.getElementById("p36").value);
				m37=parseInt(document.getElementById("p37").value);
				m38=parseInt(document.getElementById("p38").value);
				m39=parseInt(document.getElementById("p39").value);
				m40=parseInt(document.getElementById("p40").value);
				m41=parseInt(document.getElementById("p41").value);
				m42=parseInt(document.getElementById("p42").value);
				m43=parseInt(document.getElementById("p43").value);
				m44=parseInt(document.getElementById("p44").value);
				m45=parseInt(document.getElementById("p45").value);
				m46=parseInt(document.getElementById("p46").value);
				m47=parseInt(document.getElementById("p47").value);
				m48=parseInt(document.getElementById("p48").value);
				m49=parseInt(document.getElementById("p49").value);
				m50=parseInt(document.getElementById("p50").value);
				m51=parseInt(document.getElementById("p51").value);
				m52=parseInt(document.getElementById("p52").value);
				m53=parseInt(document.getElementById("p53").value);
				m54=parseInt(document.getElementById("p54").value);
				m55=parseInt(document.getElementById("p55").value);
				m56=parseInt(document.getElementById("p56").value);
				m57=parseInt(document.getElementById("p57").value);
				m58=parseInt(document.getElementById("p58").value);
				m59=parseInt(document.getElementById("p59").value);
				m60=parseInt(document.getElementById("p60").value);
				m61=parseInt(document.getElementById("p61").value);
				m62=parseInt(document.getElementById("p62").value);
				m63=parseInt(document.getElementById("p63").value);
				m64=parseInt(document.getElementById("p64").value);
				m65=parseInt(document.getElementById("p65").value);
				m66=parseInt(document.getElementById("p66").value);
				m67=parseInt(document.getElementById("p67").value);
				m68=parseInt(document.getElementById("p68").value);
				m69=parseInt(document.getElementById("p69").value);
				m70=parseInt(document.getElementById("p70").value);
				m71=parseInt(document.getElementById("p71").value);
				m72=parseInt(document.getElementById("p72").value);
				m73=parseInt(document.getElementById("p73").value);
				m74=parseInt(document.getElementById("p74").value);
				m75=parseInt(document.getElementById("p75").value);
				m76=parseInt(document.getElementById("p76").value);
				m77=parseInt(document.getElementById("p77").value);
				m78=parseInt(document.getElementById("p78").value);
				m79=parseInt(document.getElementById("p79").value);
				m80=parseInt(document.getElementById("p80").value);
				m81=parseInt(document.getElementById("p81").value);
				m82=parseInt(document.getElementById("p82").value);
				m83=parseInt(document.getElementById("p83").value);
				m84=parseInt(document.getElementById("p84").value);
				m85=parseInt(document.getElementById("p85").value);
				m86=parseInt(document.getElementById("p86").value);
				m87=parseInt(document.getElementById("p87").value);
				m88=parseInt(document.getElementById("p88").value);
				m89=parseInt(document.getElementById("p89").value);
				m90=parseInt(document.getElementById("p90").value);
				m91=parseInt(document.getElementById("p91").value);
				m92=parseInt(document.getElementById("p92").value);
				m93=parseInt(document.getElementById("p93").value);
				m94=parseInt(document.getElementById("p94").value);
				m95=parseInt(document.getElementById("p95").value);
				m96=parseInt(document.getElementById("p96").value);
				m97=parseInt(document.getElementById("p97").value);
				m98=parseInt(document.getElementById("p98").value);
				m99=parseInt(document.getElementById("p99").value);
				m100=parseInt(document.getElementById("p100").value);
				m101=parseInt(document.getElementById("p101").value);
				m102=parseInt(document.getElementById("p102").value);
				m103=parseInt(document.getElementById("p103").value);
				m104=parseInt(document.getElementById("p104").value);
				m105=parseInt(document.getElementById("p105").value);
				m106=parseInt(document.getElementById("p106").value);
				m107=parseInt(document.getElementById("p107").value);
				m108=parseInt(document.getElementById("p108").value);
				m109=parseInt(document.getElementById("p109").value);
				s112=m1+m2+m3+m4+m5+m6+m7+m8+m9+m10+m11+m12+m13+m14+m15+m16+m17+m18+m19+m20+m21+m22+m23+m24+m25+m26+m27+m28+m29+m30+m31+m32+m33+m34+m35+m36+m37+m38+m39+m40+m41+m42+m43+m44+m45+m46+m47+m48+m49+m50+m51+m52+m53+m54+m55+m56+m57+m58+m59+m60+m61+m62+m63+m64+m65+m66+m67+m68+m69+m70+m71+m72+m73+m74+m75+m76+m77+m78+m79+m80+m81+m82+m83+m84+m85+m86+m87+m88+m89+m90+m91+m92+m93+m94+m95+m96+m97+m98+m99+m100+m101+m102+m103+m104+m105+m106+m107+m108+m109;
				document.getElementById("p110").value=s112;
				document.getElementById("p111").value=s112;
				s113=s112*5/100;
				document.getElementById("p112").value=s113;
				s114=s110-s111;
				document.getElementById("u113").value=s114;
				s115=s112-s113;
				document.getElementById("p113").value=s115;
			}
		</script>
	</body>
</html>