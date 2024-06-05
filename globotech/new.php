<?php
if(isset($_POST['id1']))
{
	$server="localhost";
	$username="root";
	$password="";
	$database="major";
	
	$con=mysqli_connect($server,$username,$password,$database);
	
	if (!$con)
	{
		die("failed". mysqli_connect_erre());
	}
	
	$id1=$_POST['id1'];
	$name1=$_POST['name1'];
	$id2=$_POST['id2'];
	$name2=$_POST['name2'];
	
	$sql1="INSERT INTO `new` (`id`, `name`)VALUES ('$id1', '$name1')";
	$sql2="INSERT INTO `new` (`id`, `name`)VALUES ('$id2', '$name2')";
	
	$result1=mysqli_query($con,$sql1);
	$result2=mysqli_query($con,$sql2);
	
	if($result1==true && $result2==true)
	{
		echo"sucess";
	}
	else
	{
		echo"error";
	}
}
?>
<html>
	<body>
		<form action="new.php" method="post">
			<table>
				<tr>
					<td><input type="text" name="id1" id="id1"></td>
					<td><input type="text" name="name1" id="name1"></td>
				<tr>
				<tr>
					<td><input type="text" name="id2" id="id2"></td>
					<td><input type="text" name="name2" id="name2"></td>
				<tr>
				<tr><td><button class="btn">Submit</button></td></tr>
			</table>
		<form>
		<form action="ratable" method="post">
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
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Rs. P.</td>
					<td></td>
					<td>Rs. P.</td>
					<td>Rs. P.</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO 1. SITE CLEARANCE AND DISMANTLING</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>1.01</td>
					<td>201</td>
					<td>Clearing and grubbing road land complete as per Technical Specifications Clause 201.</td>
					<td>Hectare</td>
					<td>37000.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>1.02</td>
					<td>202</td>
					<td>Dismantling including disposal of unserviceable material and stacking the serviceable material complete as per Technical Specifications Clause 202.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a) Brick/Stone Structures.</td>
					<td>Cum</td>
					<td>148.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b) Plain Concrete/Reinforced concrete/ Pre stressed concrete structures including cleaning, straightening & cutting of bars and separating them out from RCC/PSC.</td>
					<td>Cum</td>
					<td>592.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>d) Km Stone including foundation concrete if any.</td>
					<td>Nos</td>
					<td>148.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>e) Hume pipes</td>
					<td>M</td>
					<td>296.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>h) Sign boards/bill boards</td>
					<td>Nos</td>
					<td>222.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>1.03</td>
					<td>201</td>
					<td>Cutting tree including removal of stumps, dressing the ground, transporting the same and stacking properly, complete as per technical specification clause 201,</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(a) girth above 300mm and upto 600 mm</td>
					<td>Nos</td>
					<td>666.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(b) girth above 600mm and upto 1000 mm</td>
					<td>Nos</td>
					<td>1184.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(c) girth above 1000mm and upto 1500 mm</td>
					<td>Nos</td>
					<td>2960.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(d) girth above 1500mm</td>
					<td>Nos</td>
					<td>6660.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO 2.EARTH WORK</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.01</td>
					<td>301</td>
					<td>(a) Excavation in all types of soli In hilly area necessary for construction of roadway by mechanical means Including cutting and trimming of side slopes and disposing of excavated earth with all lifts and lead and all complete as per Technical Specifications CI.301.</td>
					<td>Cum</td>
					<td>84.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.01</td>
					<td>301</td>
					<td>(b) Excavation of ordinary /hard rock in hilly area necessary for construction of roadway by mechanical means Including cutting and trimming of side slopes and disposal of cut material with all lifts and lead and all complete as per Technical Specifications CI.301,</td>
					<td>Cum</td>
					<td>276.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.02</td>
					<td>305</td>
					<td>Construction of embankment with suitable material obtained from roadway, drainage excavation etc. with all leads and lifts all complete, as per approved drawings and Technical Specifications Clause 305.</td>
					<td>Cum</td>
					<td>71.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S1</td>
					<td>401</td>
					<td>Construction of hard shoulder with Granular Sub-base with Close Graded Material By Plant Mix Method (Construction of granular sub-base by providing grade I close graded material, spreading in uniform layers with motor grader on prepared surface, mixing by mix in place method with rotavator at OMC, and compacting with vibratory roller to achieve the desired density, complete as per clause 401.</td>
					<td>Cum</td>
					<td>1122.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.04</td>
					<td>305 & 407</td>
					<td>Filling in median/island With approved material obtained from road way excavation with all leads and lifts complete as per Technical Specifications Clauses 305 & 407.</td>
					<td>Cum</td>
					<td>41.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.05</td>
					<td>307</td>
					<td>Turfing of embankment slopes, verge earthen shoulders and other locations with rough grassing all complete as per Technical Specifications Clause 307.</td>
					<td>sq.m.</td>
					<td>44.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>E1</td>
					<td>305</td>
					<td>Construction of sub grade with approved materials deposited at site from roadway cutting and excavation from drain and foundation of other structures graded and compacted to meet requirement of table 300-2.</td>
					<td>Cum</td>
					<td>220.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>E2</td>
					<td>301.9.6</td>
					<td>Disposal of surplus earth from roadway beyond initial lead of 1000 m.</td>
					<td>Cum</td>
					<td>25.15</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>E3</td>
					<td>301</td>
					<td>Removal of Unsuitable soil including excavation, loading and disposal up to 1000 metres lead but excluding replacement by suitable soil which shall be paid separately as per clause 305.</td>
					<td>Cum</td>
					<td>72.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO  3 GRANULAR BASE AND SUBBASE COURSE</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3.01</td>
					<td>401</td>
					<td>Granular Sub-base with Close Graded Material By Plant Mix Method (Construction of granular sub-base by providing grade I close graded material, spreading in uniform layers with motor grader on prepared surface, mixing by mix in place method with rotavator at OMC, and compacting with vibratory roller to achieve the desired density, complete as per clause 401.</td>
					<td>Cum</td>
					<td>1122.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3.02</td>
					<td>406</td>
					<td>Wet Mix Macadam (Providing, laying, spreading and compacting graded stone aggregate to wet mix macadam specification Including premixing the Material with water at OMC in mechanical mix plant carriage of mixed Material by tipper to site, laying in uniform layers with paver In sub- base / base course on well prepared surface and compacting with vibratory roller to achieve the desired density, complete as per clause406.</td>
					<td>Cum</td>
					<td>1871.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO 4. BITUMINOUS COURSE</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.01</td>
					<td>502</td>
					<td>Prime coat (Providing and applying primer coat with bitumen emulsion on prepared surface of granular Base including clearing of road surface and spraying primer at the rate of 1.0 kg/sqm using mechanical means complete as per clause 502.)</td>
					<td>Sqm</td>
					<td>52.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.02</td>
					<td>503</td>
					<td>a) Providing and laying tack coat using Rapid Setting bituminous emulsion to be applied at the rate of 2.5 kg per 10 Sqm on granular surface treated with primer all complete as per Technical Specifications Clause 503.</td>
					<td>Sqm</td>
					<td>12.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>503</td>
					<td>b) Providing and laying tack coat using Rapid Setting bituminous emulsion to be applied at the rate of 2.0 kg per 10 Sqm on bituminous surface all complete as per Technical Specifications Clause 503.</td>
					<td>Sqm</td>
					<td>10.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.03</td>
					<td>504</td>
					<td>Providing & laying Bituminous Macadam (Providing and laying dense bituminous macadam With 100-120 TPH batch type HMP producing an average output of 75 tonnes per hour using crushed aggregates of specified grading, premixed with bituminous binder and filler, transporting the hot mix to work site, laying with a hydrostatic paver. finisher with sensor control to the required grade, level and alignment, rolling with smooth wheeled, vibratory and tandem rollers to achieve the desired compaction as per MoRTH specification clause No. 504complete in all respects.) - For Grade I</td>
					<td>Cum</td>
					<td>8384.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.04</td>
					<td>508</td>
					<td>Providing & laying semi dense bituminous concrete with polymer modified bitumen, with 100-120 TPH batch type hot mix plant producing an average output of 75 tonnes per hour using crushed aggregates of specified grading, premixed with bituminous binder and filler, transporting the hot mix to work site, laying with a hydrostatic paver finisher With sensor control to the required grade, level and alignment, rolling with smooth wheeled, vibratory and tandem rollers to achieve the desired compaction as per MORTH specification clause No. 508complete in all respects) - For Grade I</td>
					<td>Cum</td>
					<td>9673.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.05</td>
					<td>602</td>
					<td>Providing and laying Pavement Quality Concrete of M-40 grade of specified thickness In Truck Laybye area as per Technical Specifications Clause 602 and as approved by Engineer.</td>
					<td>Cum</td>
					<td>8473.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>E3</td>
					<td></td>
					<td>Construction of dry lean cement concrete Sub- base over a prepared sub-grade with coarse and fine aggregate conforming to IS: 383, the size of coarse aggregate not exceeding 25 mm, aggregate cement ratio not to exceed 15:1, aggregate gradation after blending to be as per table 600-1,clause 601. cement content not to be less than 150 kg/ Cum, optimum moisture content to be determined during trial length construction, concrete strength not to be less than 10 Mpa at 7 days.</td>
					<td>Cum</td>
					<td>3741.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO 5. MINOR BRIDGES & CULVERTS</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.01</td>
					<td>304,309 & 2903</td>
					<td>(a) Earthwork in excavation of foundation for structures In all types of soils complete as per approved drawings and Technical Specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.03</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade In Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.04 (a)</td>
					<td>1500,1700 & 2100</td>
					<td>Providing and laying Reinforced cement concrete in Foundation and Bottom Slab of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications-Clauses 1500, 1700 & 2100.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(i)M-25</td>
					<td>Cum</td>
					<td>7356.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(ii)M-30</td>
					<td>Cum</td>
					<td>7551.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.04 (b)</td>
					<td>1500,1700 & 2200</td>
					<td>Providing and laying Reinforced cement concrete in Sub-structure and Walls of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2200.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(i)M-25</td>
					<td>Cum</td>
					<td>8818.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(ii)M-35</td>
					<td>Cum</td>
					<td>9309.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.05</td>
					<td>1500,1700 & 2300</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Parapet Wall including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700 & 2300.</td>
					<td>Cum</td>
					<td>8498.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.06</td>
					<td>800,1500,1700 & 2703</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Crash Barrier Including reinforcement all complete as per approved drawings and Technical Specifications Sections 800, 1500, 1700 & 2703.</td>
					<td>Cum</td>
					<td>14892.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.08</td>
					<td>2705</td>
					<td>Supplying, providing and fixing drainage spouts for bridges as per approved drawings and Technical Specifications lause-2705.</td>
					<td>Cum</td>
					<td>740</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.09</td>
					<td>1500,1700 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade in Catch Pit including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700 & 2300.</td>
					<td>Cum</td>
					<td>7126.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.10</td>
					<td>1400</td>
					<td>Providing and Laying Course Rubble Masonry in Cement Mortar 1:3 for walls of catch pit complete as per approved drawings and Technical Specification Section 1400.</td>
					<td>Cum</td>
					<td>2919.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.11</td>
					<td>1312</td>
					<td>Plaster on Stone Masonry in Cement Mortar 1:3 all complete as per approved drawings and Technical Specifications Clause 1312.</td>
					<td>Sqm</td>
					<td>188.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.12</td>
					<td>305 & 2907</td>
					<td>Providing and laying Back fill behind abutments, wing walls and return walls with Granular Material of approved quality including all material, labour, equipment carriage etc. all complete as per approved drawings and Technical Specifications Clause 305 & 2907.</td>
					<td>Cum</td>
					<td>511.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.13</td>
					<td>2200 & IRC:</td>
					<td>Providing and laying Hand Packed Stones weighing not less than 70 kg for filter media behind Retaining Structures all complete as per approved drawings, technical specifications and as directed by the engineer.</td>
					<td>Cum</td>
					<td>1011.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.14</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in abutments, wing walls, retaining walls, return walls etc. complete as per approved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.15</td>
					<td>1600,2200 & 2300</td>
					<td>Supplying, providing, bending and placing In position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300,</td>
					<td>MT</td>
					<td>79025.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.18</td>
					<td>500 & 2700</td>
					<td>Providing and laying In position 65 mm thick wearing coat consisting of 25mm thick layer of mastic asphalt over 40 mm bituminous concrete over deck slab after applying prime coat complete as per approved drawings and Technical Specifications sections 500 and 2700 or as directed by the Engineer.</td>
					<td>Sqm</td>
					<td>805.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.19</td>
					<td>1400</td>
					<td>Providing and laying Random Rubble Masonry in Cement Mortar 1: 4 for outlet structures complete as per approved drawings and Technical Specification Section 1400.</td>
					<td>Cum</td>
					<td>2623.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.20</td>
					<td></td>
					<td>Painting of Structure number and span arrangement over parapet walls at CD Structure locations all complete as per approved drawings and Technical Specifications.</td>
					<td>No.</td>
					<td>148.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.21</td>
					<td>2704</td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in approach slab including reinforcement for bridges complete as per approved drawings and Technical Specifications Clause 2704.</td>
					<td>Cum</td>
					<td>12410.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.22</td>
					<td>2500</td>
					<td>(a) Providing and laying Stone pitching on slopes 300mm thick for erosion protection complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>967.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>2500</td>
					<td>(b) Providing and laying Filter media underneath stone pitching complete as per approved drawings and Technical specifications section 2500.</td>
					<td>Cum</td>
					<td>878.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.23</td>
					<td>2000 & IRC:</td>
					<td>Supplying, providing , fabricating and fixing In position true to line and level POT Cum PTFE bearings complete with all accessories as per approved drawings; Technical Specifications section 2000, IRC:83(Part III) - 2002 or as directed by the Engineer.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S2</td>
					<td></td>
					<td>(v) For 250 Tonne capacity</td>
					<td>Nos</td>
					<td>26900.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.24</td>
					<td>2607</td>
					<td>Supplying, providing and fixing strip seal type expansion joint complete as per approved drawings and Technical Specifications Clause 2607.</td>
					<td>m</td>
					<td>16280.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Floor Apron 450mm Thk.</td>
					<td>Cum</td>
					<td>1200.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Flexible Apron, 750mm thk.</td>
					<td>Cum</td>
					<td>1400.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO 6. RETAINING STRUCTURES</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.01</td>
					<td>304,309 & 2903</td>
					<td>(a) Earthwork In excavation of foundation for structures in all types of soils complete as per approved drawings and Technical Specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>304,309 & 2903</td>
					<td>(b) Earthwork in excavation of foundation for structures in soft /hard rock complete as per approved drawings and Technical specifications Clauses 304, 309 & 2903.</td>
					<td>Cum</td>
					<td>528.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.03</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.05</td>
					<td></td>
					<td>Providing and laying Hand Packed Stones weighing not less than 70 kg for filter media behind Retaining Structures all complete as per approved drawings, technical  specifications and as directed by the Engineer</td>
					<td>Cum</td>
					<td>1011.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.06</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in abutments, wing walls, retaining walls, return walls etc. complete as per approved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S20</td>
					<td></td>
					<td>Providing and laying Plain cement concrete M-20 grade in Levelling course, Parapet Wall and Key Stones at Retaining Structure locations including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S3</td>
					<td></td>
					<td>Providing and laying M25  Reinforced cement concrete in Foundation and Bottom Slab of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2100.</td>
					<td>Cum</td>
					<td>7356.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S4</td>
					<td></td>
					<td>Providing and laying M25 Reinforced cement concrete in Sub-structure and Walls of Box Cell structures including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Clauses 1500, 1700 & 2200.</td>
					<td>Cum</td>
					<td>8303.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S5</td>
					<td></td>
					<td>Providing and laying Reinforced cement concrete M-30 grade in Crash Barrier including reinforcement all complete as per approved drawings and Technical Specifications Sections 800, 1500, 1700 & 2703.</td>
					<td>Cum</td>
					<td>14892.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S6</td>
					<td></td>
					<td>Supplying, providing, bending and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79025.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO.7. DRAINAGE</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.01</td>
					<td>301</td>
					<td>Earthwork in excavation necessary for construction of roadway in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S18</td>
					<td>301</td>
					<td>(a)Earthwork in excavation necessary for construction of Irrigation canal in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>84.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S19</td>
					<td>301</td>
					<td>(b) Excavation of ordinary /hard rock in hilly area necessary for construction of irrigation canal by mechanical means Including cutting and trimming of side slopes and disposal of cut material with all lifts and lead and all complete as per Technical Specifications CI.301.</td>
					<td>Cum</td>
					<td>276.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.03</td>
					<td>1500 & 1700</td>
					<td>Construction of semi-circular drainage chute in cement concrete M-15 with foundation concrete as per approved drawings and Technical Specifications Sections 1500 and 1700 including construction of bell mouth at entry.</td>
					<td>m</td>
					<td>814.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.04</td>
					<td>1500 & 1700</td>
					<td>Construction of energy dissipation basin and sumps in M-15 as per approved drawings and Technical Specifications Section 1500 & 1700.</td>
					<td>No.</td>
					<td>37000.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.05</td>
					<td>2500</td>
					<td>(a) Providing and laying Stone pitching on slopes 300mm thick for erosion protection complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>967.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>2500</td>
					<td>(b) Providing and laying Filter media underneath stone pitching complete as per approved drawings and Technical Specifications section 2500.</td>
					<td>Cum</td>
					<td>878.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.07</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in levelling course below Drain bottom and Pipe Culverts including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700,</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.12</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade for Open lined trapezoidal drains Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.13</td>
					<td>2706</td>
					<td>Making, providing and fixing weep holes in side drains complete as preapproved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>296.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.15</td>
					<td>1400</td>
					<td>Providing and Laying Course Rubble Masonry In Cement Mortar 1:3 for walls of covered drain at Truck Lay Bye location complete as per approved drawings and Technical Specification Section 1400</td>
					<td>Cum</td>
					<td>30.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.16</td>
					<td>1312</td>
					<td>Pointing on Stone Masonry in Cement Mortar 1;3 all complete as per approved drawings and Technical Specifications Clause 1312.</td>
					<td>sq,m.</td>
					<td>30.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>7.17</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-20 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 .</td>
					<td>Cum</td>
					<td>8646.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S7</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-25 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 .</td>
					<td>Cum</td>
					<td>8818.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S9</td>
					<td></td>
					<td>Supplying, providing, bending  and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79205.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S10</td>
					<td>301</td>
					<td>Earthwork in excavation necessary for construction of roadway in all types of soil all complete as per approved drawings and Technical Specifications Clause 301.</td>
					<td>Cum</td>
					<td>99.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S11</td>
					<td>1500 & 1700</td>
					<td>Providing and laying Plain cement concrete M-15 grade in levelling course below Drain bottom and Pipe Culverts including centring and shuttering all complete as per approved drawings and Technical Specifications Sections 1500 & 1700,</td>
					<td>Cum</td>
					<td>5620.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S13</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and laying Plain cement concrete M-20 grade for Open lined trapezoidal drains Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300, ..</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S14</td>
					<td></td>
					<td>Supplying, providing, bending and placing in position un-coated TMT (HYSD) bar Reinforcement complete as per approved drawings and Technical Specifications Section 1600, 2200 and 2300. </td>
					<td>MT</td>
					<td>79025.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S15</td>
					<td>1500,1700, 2100,2200 & 2300</td>
					<td>Providing and fixing precast RCC M-25 Grade Top Slab of covered drains at Truck lay bye location including centring and shuttering but excluding reinforcement all complete as per drawing and Technical Specification Sections 1500, 2100,2200 & 2300 </td>
					<td>Cum</td>
					<td>8818.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S16</td>
					<td>2718</td>
					<td>Making, providing and fixing weep holes in side drains complete as preapproved drawings and Technical Specifications Clause 2706.</td>
					<td>Nos</td>
					<td>298.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO. 8. JUNCTIONS AND TRAFFIC SAFETY</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.01</td>
					<td>409</td>
					<td>Providing and laying 38 mm thick precast cement concrete Paving tiles as per approved drawings and Technical Specifications Clause 409.</td>
					<td>sq,m.</td>
					<td>506</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.02</td>
					<td>408</td>
					<td>Providing and laying 38 mm thick precast cement concrete Paving tiles as per approved drawings and Technical Specifications Clause 409.</td>
					<td>m</td>
					<td>654.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>S17</td>
					<td>1500,1700 ,2100 & 2200</td>
					<td>Providing and laying Plain cement concrete M-20 grade for foundation of metallic crash barrier Including centring and shuttering but excluding reinforcement all complete as per approved drawings and Technical Specifications Sections 1500, 1700, 2100, 2200 & 2300.</td>
					<td>Cum</td>
					<td>7166.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.03</td>
					<td></td>
					<td>Constructing speed breaker complete as per drawing and at the location as directed by the Engineer.</td>
					<td>m</td>
					<td>1480.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.04</td>
					<td>810</td>
					<td>Providing and fixing single metal beam crash barrier complete as per approved drawings and Technical Specifications Clause 810:</td>
					<td>m</td>
					<td>2451.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.05</td>
					<td></td>
					<td>Providing and fixing M-20 guard post as per approved drawings & Technical Specifications</td>
					<td>No.</td>
					<td>709.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>8.06</td>
					<td>300,808, 1500,1700 & 1900</td>
					<td>Providing, fixing and erecting pedestrian railing at passenger shelter including foundation concrete and painting with approved paint complete as per approved drawing and technical specification clause808 and sections 300, 1500, 1700 & 1900</td>
					<td>m</td>
					<td>1776.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Bill No. 9 TRAFFIC SIGNS MARKING AND OTHER APPURTENANCES</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.01</td>
					<td>800</td>
					<td>Providing and fixing reinforced cement concrete stones Including excavation, foundation concrete, reinforcement and Inscription etc. all complete as per approved drawings Technical Specifications Section800.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>i) Boundary stones.</td>
					<td>No.</td>
					<td>2836.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>ii) 5th km, stone</td>
					<td>No.</td>
					<td>4070.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>iii) Km, stone</td>
					<td>No.</td>
					<td>2569.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>iv) Hectometre stone</td>
					<td>No.</td>
					<td>336.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.02</td>
					<td>803</td>
					<td>Pavement marking with hot applied thermoplastic paints conforming to ASTM D36/BS-3262 (Part - I) as per approved drawings and Technical Specifications Clause 803.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a) Lane/centre line/edge line/ transverse marking, Pedestrian Crossing and any other markings,</td>
					<td>sq,m.</td>
					<td>444.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b) Directional Arrows, lettering etc. as per Drg. No. 61 of MOST Type “Design for Inter-sections on National Highways".</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(i) RM 13</td>
					<td>No.</td>
					<td>259.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(ii) RM 16 & 17</td>
					<td>No.</td>
					<td>296.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(iii) Lettering</td>
					<td>No.</td>
					<td>148.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(iv) Chevron Marking</td>
					<td>sq,m.</td>
					<td>370.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.03</td>
					<td>801</td>
					<td>Supplying and fixing at site retro-reflectorised type sign boards/signs Including definition plates all complete as per approved drawings and Technical specifications clause 801.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>(a) Informatory Signs, Facility Signs, Direction Signs, Advance Direction/ Destination Signs, Route Marker Skins etc.</td>
					<td>sq,m.</td>
					<td>6660.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b) Cautionary Signs, Triangular (Size 900 mm side).</td>
					<td>No.</td>
					<td>5090.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>i) Circular 600 mm dia.</td>
					<td>No.</td>
					<td>4027.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.04</td>
					<td>805</td>
					<td>Providing and fixing retro-reflectorised Road delineators complete as per approved drawings and Technical Specifications Clause 805.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a) Roadway Delineator</td>
					<td>No.</td>
					<td>444.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>9.05</td>
					<td></td>
					<td>Providing and fixing road side reflective road stud 100mm X 100mm as per Technical Specifications.</td>
					<td>No.</td>
					<td>370.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Bill No. 10  MISCELLANEOUS</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>10.01</td>
					<td></td>
					<td>Bill No. 10  MISCELLANEOUS</td>
					<td>No.</td>
					<td>148000.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>10.02</td>
					<td></td>
					<td>Painting with synthetic enamel paint on kerb at Bus Bay and Truck Laybye location complete as per approved drawings, technical specification and as directed by Engineer.</td>
					<td>sq,m.</td>
					<td>81.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>BILL NO.11. LANDSLIDE </td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>E4</td>
					<td></td>
					<td>Land slide removal .</td>
					<td>Cum</td>
					<td>84.00</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</form>
	</body>
</html>
				
				
				document.getElementById("p110").value=s111;
				document.getElementById("p111").value=s111;
				