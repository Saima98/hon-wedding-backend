<!--RVSP SECTION START-->
		<section id="rsvp" class="rvsp_area">
			<div class="rvsp container fix pd100">
				<div class="form">
					<h1 class="common_heding">be our guest</h1>
					<p>Please reserve before December 15th, 2018.</p>
					<form action="action/action.php" method="post" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="your name*" required>
						<input type="email" name="email" placeholder="your email*" required>
						<select name="guest" type="int" required>
							<option>number of guest</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
						<select name="status" type="text" required>
							<option value="i am attending">i am attending</option>
							<option value="all event">all event</option>
							<option value="wedding ceremony">wedding ceremony</option>
							<option value="reception party">reception party</option>
						</select>
						<input type="file" name="file_to_up" id="file_to_up" accept="image/*"/>
						<textarea name="message" placeholder="Message"></textarea>
						<input type="submit" value="send invitation">
					</form>
				</div>
			</div>
		</section>
		
		
		
		
		//ALTER TABLE tbl ADD id INT PRIMARY KEY AUTO_INCREMENT;