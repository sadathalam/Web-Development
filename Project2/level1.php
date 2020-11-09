

<?php include("header.html"); ?>


<h1>Level 1</h1>

		<form action="level1-submit.php" method="post" id="quiz">
			<fieldset>

            <ol>

                <li>

		    <h3>Which number should come next in the pattern? : 37, 34, 31, 28 </h3>

                    <div>
                        <input type="radio" name="q1answers" id="q1A" value="A" />
                        <label for="q1A">A) 25 </label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1B" value="B" />
                        <label for="q1B">B) 41</label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1C" value="C" />
                        <label for="q1C">C) 20 </label>
                    </div>

                    <div>
                        <input type="radio" name="q1answers" id="q1D" value="D" />
                        <label for="q1D">D) None of the above </label>
                    </div>

                </li>

                <li>

			<h3>Find the answer that best completes the analogy: Book is to Reading as Fork is to____</h3>

                    <div>
                        <input type="radio" name="q2answers" id="q2A" value="A" />
                        <label for="q2A">A) Drawing </label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2B" value="B" />
                        <label for="q2B">B) Writing </label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2C" value="C" />
                        <label for="q2C">C) Stirring</label>
                    </div>

                    <div>
                        <input type="radio" name="q2answers" id="q2D" value="D" />
                        <label for="q2D">D) Eating</label>
                    </div>

                </li>

                <li>

			<h3>Which answer expresses the meaning of "reassuring" best? </h3>

                    <div>
                        <input type="radio" name="q3answers" id="q3A" value="A" />
                        <label for="q3A">A) Compassionate </label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3B" value="B" />
                        <label for="q3B">B) Comforting</label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3C" value="C" />
                        <label for="q3C">C) Explanatory</label>
                    </div>

                    <div>
                        <input type="radio" name="q3answers" id="q3D" value="D" />
                        <label for="q3D">D) Meddlesome</label>
                    </div>

                </li>


            </ol>

            <p>Ready to submit this level?</p><input type="submit" value="Submit Level 1" />

					</fieldset>
		</form>

	</div>
<?php include("footer.html"); ?>
