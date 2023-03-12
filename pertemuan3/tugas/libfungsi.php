
<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($uts, $uas, $praktikum) {
        $total_nilai = ($uts * 0.30) + ($uas * 0.35) + ($praktikum * 0.35);
		
        if($total_nilai > 55){
            return 'Lulus';
        }else{
            return 'Tidak Lulus';
        }

        return $total_nilai;


        /**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
	}
	
	function grade($kelulusan) {
        if ($kelulusan >= 85 && $kelulusan <= 100 ){
            return "A";
        }else if ($kelulusan >= 70 && $kelulusan <= 84) {
            return "B";
        } else if ($kelulusan >=56  && $kelulusan <= 69) {
            return "C";
        } else if ($kelulusan >=36  && $kelulusan <= 55) {
            return "D";
        } else if ($kelulusan <= 35) {
            return "E";
        } else {
            return "I";
        }
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
	}
	
	function predikat($kelulusan){
        
        switch (grade($kelulusan)) {
            case "A":
                return 'Sangat Memuaskan' ;
            case "B":
                return 'Memuaskan' ;
            case "C":
                return 'Cukup' ;
            case "D":
                return 'Kurang' ;
            case "E":
                return 'Sangat Kurang' ;
            default:
                return 'tidak ada' ;
        }
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
	}
?>