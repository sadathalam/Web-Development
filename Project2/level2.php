<?php include("header.html"); ?>


		<h1>Level 2</h1>

		<form action="level2-submit.php" method="post" id="quiz">
			<fieldset>

            <ol>

                <li>

		    <h3>Which number logically follows this series?  4     6     9     6     14     6  ____</h3>

                    <div>
                        <input type="radio" name="q1answers" id="q1A" value="A" />
                        <label for="q1A">A) 6 </label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1B" value="B" />
                        <label for="q1B">B) 17</label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1C" value="C" />
                        <label for="q1C">C) 19 </label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1D" value="D" />
                        <label for="q1D">D) 21 </label>
                    </div>

                </li>

                <li>

			<h3>Which conclusion follows from the statements with absolute certainty?</h3>
			"None of the stamp collectors is an architect."
			<br>"All the drones are stamp collectors."<br><br>


                    <div>
                        <input type="radio" name="q2answers" id="q2A" value="A" />
                        <label for="q2A">A) All stamp collectors are architects </label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2B" value="B" />
                        <label for="q2B">B) Architects are not drones</label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2C" value="C" />
                        <label for="q2C">C) No stamp collectors are drones </label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2D" value="D" />
                        <label for="q2D">D) Some drones are architects</label>
                    </div>

                </li>

                <li>

			<h3>What is the correct answer to the following problem.</h3>
			<p>Tom has a new set of golf clubs. Using a club 8, the ball travels an average distance of 100 meters.
			<br> Using a club 7, the ball travels an average distance of 108 meters.
			<br>Using a club 6, the ball travels an average distance of 114 meters.
			<br>How far will the ball go if Tom uses a club 5?<p/>

                    <div>
                        <input type="radio" name="q3answers" id="q3A" value="A" />
                        <label for="q3A">A) 122 </label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3B" value="B" />
                        <label for="q3B">B) 120</label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3C" value="C" />
                        <label for="q3C">C) 118</label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3D" value="D" />
                        <label for="q3D">D) 116</label>
                    </div>

                </li>


            </ol>

            <p>Ready to submit this level?</p><input type="submit" value="Submit Level 2" />

				</fieldset>
		</form>

	</div>
<?php include("footer.html"); ?>
