<?php
	
		//thuộc tinh , và phương thức 
	// 	public $name;
	// 	public $age;

	// 	public function __construct($name, $age){
	// 		$this->name = $name;
	// 		$this ->tuoi = $age;
	// 	}
	// 	public function getName(){
	// 		return $this->name;
			
	// 	}
	// 	public function getTuoi(){
	// 		return $this->tuoi;
			
	// 	}

	// }
 
	// $Nam = new people("Bo Teo", 7);  // $Nam laf 1 Object 
	// $inputName = $Nam-> getName();
	// $inputTuoi = $Nam-> getTuoi();
	// echo 'toi la : ' .$inputName  . ','. $inputTuoi . ' Tuoi  ';

	// $quang = new people('Quang teo');
	// $inputName = $quang-> getName();
// -----

		// 1 : Tính trừu tượng . Abstract và interface 
		// 2 : Kế thừa 
		// 3 : đóng gói 
		// 4 : đa Hình

		// 1.1 Abstract : 
			// Abstract class people {
			// 	Abstract public function getName();
			// 	Abstract public function getTuoi();

				
			// }
			// class Human extends people {
			// 	public function getName(){
			// 		echo 'Human';
			// 	}
			// 	public function getTuoi(){
			// 		echo "  18 tuoi";
			// 	}
			// }
			// $toi = new Human;
			// $toi-> getName();
			// $toi-> getTuoi();

		// -- 1.2 : interface
			
			// interface Aninal{
			// 	public function getSkin();
			// 	public function run();

			// }
			// class Dog implements Aninal {
			// 	function getSkin(){
			// 		echo "Dog trang";
			// 	}
			// 	function run(){
			// 		echo " - Chay , nhay";
			// 	}
			// }
			// $mix = new Dog;
			// $mix-> getSkin();
			// $mix -> run();

			// --- vi du 2
			interface loaiHoa{
				public function toaHuong();
				public function coGai();
				public function giaTri();
			}

			class HoaHong implements loaiHoa{
				function toaHuong(){
					echo "Co Mui Thom";
				}
				function coGai(){
					echo " Nhieu Gai ";
				}
				function giaTri(){
					echo " Nhieu tien";
				}
			}
			$HoaHongDen = new HoaHong;
			$HoaHongDen -> toaHuong();
			$HoaHongDen ->coGai();
			$HoaHongDen ->giaTri();
