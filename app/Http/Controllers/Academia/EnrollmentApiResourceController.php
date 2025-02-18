<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\EnrollmentApiResource;
use App\Models\Academia\EnrollmentModel;

class EnrollmentApiResourceController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function check(Request $request)
  {
      $enrollment = EnrollmentModel::find( $request->dni );

      return new EnrollmentApiResource(collect([
        'register'  => ( $enrollment ? 1 : 0 ),
        'key'       => ( $enrollment ? encrypt( $enrollment->student_dni ) : '' )
      ]));
  }
}
