@extends('shopify-app::layouts.default')
<link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
@section('content')



<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>XLS</title>
  <link rel="stylesheet" href="{{ asset('assets') }}/polished.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/bootstrap.min.css">

  <link rel="icon" href="assets/polished-logo-small.png">

  <style>
    .grid-highlight {
      padding-top: 1rem;
      padding-bottom: 1rem;
      background-color: #5c6ac4;
      border: 1px solid #202e78;
      color: #fff;
    }

    hr {
      margin: 6rem 0;
    }

    hr+.display-3,
    hr+.display-2+.display-3 {
      margin-bottom: 2rem;
    }
  </style>
  <script type="text/javascript">
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js') + (document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1") ? ' svg' : ' no-svg');
  </script>

</head>

<body>

    <div class="container-fluid h-100 p-0">
        <div style="min-height: 100%" class="flex-row d-flex align-items-stretch m-0">

            <div class="col-lg-12 col-md-9 p-4">
                <div class="row h-100">
                  <div class="col-md-12 pl-3 pt-2">
                      <div class="pl-3">
                        <div class="row ">
                            <div class="col-md-12 pl-3 pt-2">
                                <div class="pl-3 float-right">
                                    <button class="btn btn-primary">Upgrade Plan</button>
                                </div>
                            </div>
                          </div>
                        <div class="row pl-3 my-2 mb-5">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-header bg-white pb-1">
                                  <h5>Download XLS</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3">
                                            <label for="validationServer01">Company Name</label>
                                            <input type="text" class="form-control " id="validationServer01" placeholder="Meta Pvt." value="" required="">

                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Head Office</label>
                                            <input type="text" class="form-control " id="validationServer02" placeholder="New York City." value="" required="">

                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationServer03">VAT Number</label>
                                            <input type="text" class="form-control " id="validationServer03" placeholder="67670" value="" required="">

                                          </div>

                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-3 mb-3">
                                            <label for="validationServer04">Select Year</label>
                                            <select class="form-control" name="" id="">
                                                <option >2012</option>
                                                <option >2013</option>
                                                <option >2014</option>
                                                <option >2015</option>
                                                <option >2016</option>
                                                <option >2017</option>
                                                <option >2018</option>
                                                <option >2019</option>
                                                <option >2020</option>
                                                <option >2021</option>
                                                <option >2022</option>
                                              </select>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="validationServer05">Select Month</label>
                                            <select class="form-control" name="" id="">
                                                <option >January</option>
                                                <option >February</option>
                                                <option >March</option>
                                                <option >April</option>
                                                <option >May</option>
                                                <option >June</option>
                                                <option >July</option>
                                                <option >August</option>
                                                <option >September</option>
                                                <option >October</option>
                                                <option >November</option>
                                                <option >December</option>
                                              </select>
                                          </div>

                                        </div>

                                        <button class="btn btn-primary" type="submit">Download XLS</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>


    <!-- You are: (shop domain name) -->
    {{--  <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>  --}}
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
