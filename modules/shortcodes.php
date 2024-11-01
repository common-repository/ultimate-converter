<?php  
add_shortcode('converter', 'wuc_convertor');
function wuc_convertor( $atts, $content = null ){
	
	$out .= '
	<div class="conertor_cont tw-bs">
		<div class="tabs_line">
			<ul class="nav nav-tabs">  
				<li class="active"> 
					<a href="#weight">Weight</a> 
				</li>   
				<li>
					<a href="#lenght">Length</a>
				</li>   
				<li>
					<a href="#volume">Volume</a>
				</li> 
				<li>
					<a href="#areas">Areas</a>
				</li> 
				<li>
					<a href="#temp">Temperature</a>
				</li> 				
				<li>
					<a href="#cloth">Cloth/shoe sizes</a>
				</li>   
				</ul> 
		</div>
		<div class="content_line">
			
			
			
			<div class="s_content col_2" id="weight">
				<table class="table">  
					<tbody>  
					  <tr>  
						<td><input id="weight_1" value="0" ></td>  
						<td><input id="weight_2" value="0" ></td>   
					  </tr>  
					  <tr>  
						<td>
							<select id="weight_picker_1">
								<option value="0">Kilogram
								<option value="1">Gram
								<option value="2">Milligram
							</select>
						</td>  
						<td>
							<select id="weight_picker_2">
								<option value="0">Kilogram
								<option value="1">Gram
								<option value="2">Milligram
							</select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>  
			</div>
			
			
			<div class="s_content col_2" id="temp">
				<table class="table">  
					<tbody>  
					  <tr>  
						<td><input id="temp_1" value="0" ></td>  
						<td><input id="temp_2" value="0" ></td>   
					  </tr>  
					  <tr>  
						<td>
							<select id="temp_picker_1">
								<option value="c">Celsius
								<option value="f">Farenheit
							</select>
						</td>  
						<td>
							<select id="temp_picker_2">
								<option value="c">Celsius
								<option value="f">Farenheit
							</select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>  
			</div>
			
			<div class="s_content col_2" id="lenght">
				<table class="table">  
					<tbody>  
					  <tr>  
						<td><input id="lenght_1" value="0" ></td>  
						<td><input id="lenght_2" value="0" ></td>   
					  </tr>  
					  <tr>  
						<td>
							<select id="lenght_picker_1">
									<option value="0">Centimeters</option>
									<option value="1">Meters</option>
									<option value="2">Kilometers</option>
									<option value="3">Miles</option>
									<option value="4">Inches</option>
									<option value="5">Feet</option>
									<option value="6">Yards</option>
							</select>
						</td>  
						<td>
							<select id="lenght_picker_2">
								<option value="0">Centimeters</option>
									<option value="1">Meters</option>
									<option value="2">Kilometers</option>
									<option value="3">Miles</option>
									<option value="4">Inches</option>
									<option value="5">Feet</option>
									<option value="6">Yards</option>
							</select>
						</td>    
					  </tr>   
					</tbody>  
				  </table> 
			</div>
			

			<div class="s_content col_2" id="volume">
				<table class="table">  
					<tbody>  
					  <tr>  
						<td><input id="volume_1" value="0" ></td>  
						<td><input id="volume_2" value="0" ></td>   
					  </tr>  
					  <tr>  
						<td>
							<select id="volume_picker_1">
								<option value="0">Cup
								<option value="1">Centiliters
								<option value="2">Deciliters
								<option value="3">Milliliters								
							</select>
						</td>  
						<td>
							<select id="volume_picker_2">
								<option value="0">Cup
								<option value="1">Centiliters
								<option value="2">Deciliters
								<option value="3">Milliliters	
							</select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>
			</div>

			
			<div class="s_content col_2" id="areas">
				<table class="table">  
					<tbody>  
					  <tr>  
						<td><input id="areas_1" value="0" ></td>  
						<td><input id="areas_2" value="0" ></td>   
					  </tr>  
					  <tr>  
						<td>
							<select id="areas_picker_1">
								<option value="0">Square centimeter
								<option value="1">Square meter
								<option value="2">Square kilometer  
							</select>
						</td>  
						<td>
							<select id="areas_picker_2">
								<option value="0">Square centimeter
								<option value="1">Square meter
								<option value="2">Square kilometer
							</select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>
			</div>
			<div class="s_content col_3" id="cloth">
				<table class="table1 size_table">  
					<tbody>   
					  <tr>  
						<td colspan="4" class="al_c  weight_bold">
							Man Clothing Size
						</td>  						
					  </tr>
					  <tr>  
						<td>
							U.S.
						</td>  
	
						<td>
							U.K.
						</td>
						<td>
							Euro
						</td>
					  </tr>
					  
					  <tr>  
						<td>
							<select id="m_c_cloth_1">
								<option>32</option>
								<option>34</option>
								<option>36</option>
								<option>38</option>
								<option>40</option>
								<option>42</option>
								<option>44</option>
								<option>46</option>
								<option>48</option>
							  </select>
						</td>     
						<td>
							<select id="m_c_cloth_2">
								<option>32</option>
								<option>34</option>
								<option>36</option>
								<option>38</option>
								<option>40</option>
								<option>42</option>
								<option>44</option>
								<option>46</option>
								<option>48</option>
							  </select>
						</td>
						<td>
							<select id="m_c_cloth_3">
								<option>42</option>
								<option>44</option>
								<option>46</option>
								<option>48</option>
								<option>50</option>
								<option>52</option>
								<option>54</option>
								<option>56</option>
								<option>58</option>
							  </select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>
				<table class="table1 size_table">  
					<tbody>   
					  <tr>  
						<td colspan="4" class="al_c  weight_bold">
							Woman Clothing Size
						</td>  						
					  </tr>
					  <tr>  
						<td>
							U.S.
						</td>  
						<td>
							U.K.
						</td>
						<td>
							Euro
						</td>
					  </tr>
					  
					  <tr>  
						<td>
							<select id="w_c_cloth_1">
								<option>2</option>
								<option>4</option>
								<option>6</option>
								<option>8</option>
								<option>10</option>
								<option>12</option>
								<option>14</option>
								<option>16</option>
								<option>18</option>
								<option>20</option>
								<option>22</option>
								<option>24</option>
							  </select>
						</td>    
						<td>
							<select id="w_c_cloth_2">
								<option>4</option>
								<option>6</option>
								<option>8</option>
								<option>10</option>
								<option>12</option>
								<option>14</option>
								<option>16</option>
								<option>18</option>
								<option>20</option>
								<option>22</option>
								<option>24</option>
								<option>26</option>
							  </select>
						</td>
						<td>
							<select id="w_c_cloth_3">
								<option>32</option>
								<option>34</option>
								<option>36</option>
								<option>38</option>
								<option>40</option>
								<option>42</option>
								<option>44</option>
								<option>46</option>
								<option>50</option>
								<option>52</option>
								<option>54</option>
								<option>56</option>
							  </select>
						</td>    
					  </tr>   
					</tbody>  
				  </table>
				  
				  
				  <table class="table1 size_table">  
					<tbody>   
					  <tr>  
						<td colspan="4" class="al_c  weight_bold">
							Man Shoes Size
						</td>  						
					  </tr>
					  <tr>  
						<td>
							U.S.
						</td>  
						<td>
							U.K.
						</td>
						<td>
							Europe
						</td>
					  </tr>
					  
					  <tr>  
						<td>
							<select id="m_s_s_1">
									<option>3</option>
									<option>3½</option>
									<option>4</option>
									<option>4½</option>
									<option>5</option>
									<option>5½</option>
									<option>6</option>
									<option>6½</option>
									<option>7</option>
									<option>7½</option>
									<option>8</option>
									<option>8½</option>
									<option>9</option>
									<option>9½</option>
									<option>10</option>
									<option>10½</option>
									<option>11</option>
									<option>11½</option>
									<option>12</option>
									<option>12½</option>
									<option>13</option>
									<option>13½</option>
									<option>14</option>							
							  </select>
						</td>
						<td>
							<select id="m_s_s_2">
								<option>2½</option>
								<option>3</option>
								<option>3½</option>
								<option>4</option>
								<option>4½</option>
								<option>5</option>
								<option>5½</option>
								<option>6</option>
								<option>6½</option>
								<option>7</option>
								<option>7½</option>
								<option>8</option>
								<option>8½</option>
								<option>9</option>
								<option>9½</option>
								<option>10</option>
								<option>10½</option>
								<option>11</option>
								<option>11½</option>
								<option>12</option>
								<option>12½</option>
								<option>13</option>
								<option>13½</option>
							  </select>
						</td>						
						<td>
							<select id="m_s_s_3">
									<option>34</option>
									<option>35</option>
									<option>35½</option>
									<option>36</option>
									<option>37</option>
									<option>37½</option>
									<option>38</option>
									<option>38½</option>
									<option>39</option>
									<option>40</option>
									<option>41</option>
									<option>42</option>
									<option>43</option>
									<option>43½</option>
									<option>44</option>
									<option>44½</option>
									<option>45</option>
									<option>45½</option>
									<option>46</option>
									<option>46½</option>
									<option>47</option>
									<option>47½</option>
									<option>48½</option>
							  </select>
						</td>    
						
						    
					  </tr>   
					</tbody>  
				  </table>
				  
				  <table class="table1 size_table">  
					<tbody>   
					  <tr>  
						<td colspan="4" class="al_c  weight_bold">
							Woman Shoes Size
						</td>  						
					  </tr>
					  <tr>  
						<td>
							U.S.
						</td>  
						<td>
							U.K.
						</td>
						<td>
							Europe
						</td>
						
					  </tr>
					  
					  <tr>  
						<td>
							<select id="w_s_s_1">
										<option>5</option>
										<option>5½</option>
										<option>6</option>
										<option>6½</option>
										<option>7</option>
										<option>7½</option>
										<option>8</option>
										<option>8½</option>
										<option>9</option>
										<option>9½</option>
										<option>10</option>
										<option>10.5</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15.5</option>						
							  </select>
						</td>  
						    
						<td>
							<select id="w_s_s_2">
								<option>2½</option>
								<option>3</option>
								<option>3½</option>
								<option>4</option>
								<option>4½</option>
								<option>5</option>
								<option>5½</option>
								<option>6</option>
								<option>6½</option>
								<option>7</option>
								<option>7½</option>
								<option>8</option>
								<option>9½</option>
								<option>10½</option>
								<option>11½</option>
								<option>13</option>
							  </select>
						</td>
						 <td>
							<select id="w_s_s_3">
								<option>35</option>
								<option>35½</option>
								<option>36</option>
								<option>37</option>
								<option>37½</option>
								<option>38</option>
								<option>38½</option>
								<option>39</option>
								<option>40</option>
								<option>41</option>
								<option>42</option>
								<option>43</option>
								<option>44</option>
								<option>45</option>
								<option>46½</option>
								<option>48½</option>
							  </select>
						</td>   
					  </tr>   
					</tbody>  
				  </table>
				 
				  
			</div> 
		</div>
	</div>
	';
	return $out;
}

?>