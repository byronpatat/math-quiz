<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Math Quiz</title>
  </head>
  <body>
    <div class="container-fluid">

      <div class="text-center">
        <h1>Super Hard Math Quiz</h1>
      </div>

      <section>
      <form action="grade.php" method="post" id="quiz">
        <div class="pt-3">
          <div class="text-center">
            <h3>What does &radic;<span>4</span> equal?</h3>
          </div>

          <div class="box text-center">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
              <label class="form-check-label" for="question-1-answers-A">
                A) 2
              </label>
            </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
            <label class="form-check-label" for="question-1-answers-B">
              B) 3
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-C" value="C">
            <label class="form-check-label" for="question-1-answers-C">
              C) 6
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-D" value="D">
            <label class="form-check-label" for="question-1-answers-D">
              D) 5
            </label>
          </div>

          </div>

        </div>

       </section>
            <hr>
        <section>

            <div class="text-center">
              <h3>What does 8<sup>2</sup> equal?</h3>
            </div>

            <div class="box text-center">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-A" value="A">
                <label class="form-check-label" for="question-2-answers-A">
                  A) 13
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-B" value="B">
                <label class="form-check-label" for="question-2-answers-B">
                  B) 64
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-C" value="C">
                <label class="form-check-label" for="question-2-answers-C">
                  C) 25
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-D" value="D">
                <label class="form-check-label" for="question-2-answers-D">
                  D) 2
                </label>
              </div>
            </div>



        </section>
            <hr>
          <section>

              <div class="text-center">
                <h3>What is the name of this Formula?</h3>

                <div id="formula" style="margin-left: 41%;">
                  <table class="my-3" style="font-family:verdana;">
                    <tr>
                      <td>&minus;b &plusmn;
                      &radic;<span style="text-decoration:overline"> &nbsp;
                      b<span style="font-size: 10px;vertical-align:+40%;">2</span> &minus;
                      4ac&nbsp;</span></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">
                      <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      2a &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                      </td>
                    </tr>
                  </table>
                </div>


              </div>

              <div class="box text-center">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-A" value="A">
                  <label class="form-check-label" for="question-3-answers-A">
                  A) Lagrange Interpolation Formula
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-B" value="B">
                <label class="form-check-label" for="question-3-answers-B">
                  B) Regression Sum of Squares Formula
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-C" value="C">
                <label class="form-check-label" for="question-3-answers-C">
                  C) Inverse Hyperbolic Functions Formula
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-D" value="D">
                <label class="form-check-label" for="question-3-answers-D">
                  D) Quadratic Formula
                </label>
              </div>
            </div>


            </div>

            <div class="text-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </section>
        </form>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
