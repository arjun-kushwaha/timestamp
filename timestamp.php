#to show comment time 	

	 function timestamp($date=null) {
			$current_time = strtotime(date('Y-m-d H:i:s'));
			$diff_time = $current_time - strtotime($date);
			echo date('Y-m-d H:i:s');

			if ($diff_time < 60 ) {
				return 'few seconds ago';
			}
			else if ($diff_time > 60 && $diff_time < 3600) {
				return round($diff_time/60).' minutes ago';
			}
			else if ($diff_time > 3600 && $diff_time < 86400) {
				return round($diff_time/3600).' hours ago';
			}
			else if ($diff_time > 86400 && $diff_time < 86400*30) {
				return round($diff_time/86400).' days ago';
			}
			else{
				return $date;
			}

	

		}
