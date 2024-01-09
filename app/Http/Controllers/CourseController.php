<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Validator;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        $formattedCourses = $courses->map(function ($course) {
            return [
                'title' => $course->title,
                'description' => $course->description,
                'pdf' => $course->pdf,

            ];
        });

        $data = [
            'status' => 200,
            'courses' => $formattedCourses,
        ];

        return response()->json($data, 200);

       }
       public function upload(Request $request){
               $validator= Validator::make($request->all(),[
                   'title'=>'required',
                   'description'=>'required',

               ]);
               if($validator->fails()){
                $data=[
                    "status"=>422,
                    "message"=>$validator->messages()
                ];
                return response()->json($data,422);
               }
               else{
                 $course=new Course;
                 $course->title=$request->title;
                 $course->description=$request->description;
                 $course->pdf =$request->pdf;
                 $course->save();

                 /*
                 $course->pdf=$request->pdf;*/
                 $data=[
                    "status"=>200,
                    "message"=>'Data uploaded successfully'
                 ];
                   return response()->json($data,200);
               }
                     }



       public function edit(Request $request, $id)
                        {
                            $validator= Validator::make($request->all(),[
                                'title'=>'required',
                                'description'=>'required',
             
                            ]);
                            if($validator->fails()){
                             $data=[
                                 "status"=>422,
                                 "message"=>$validator->messages()
                             ];
                             return response()->json($data,422);
                            }
                            else{
                              $course=Course::find($id);
                              $course->title=$request->title;
                              $course->description=$request->description;
                              $course->pdf =$request->pdf;
                              $course->save();
             
                              /*
                              $course->pdf=$request->pdf;*/
                              $data=[
                                 "status"=>200,
                                 "message"=>'Data updated successfully'
                              ];
                                return response()->json($data,200);
                            }
                        }
                        public function delete($id){
                          $course=Course::find($id);
                          $course->delete();
                          $data=[
                            "status"=>200,
                            "message"=>'Data deleted successfully'
                         ];
                           return response()->json($data,200);
                        }

 }
