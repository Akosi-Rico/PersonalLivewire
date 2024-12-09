<?php

namespace App\Services\Model;

use App\Services\Helper;
use App\Services\JsonOutput;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class StudentService 
{
    use Helper;

    public function store($request, $model): object
    {
       try {
            DB::beginTransaction();

                if (empty($request)) {
                    return false;
                }
                
                $model::create([
                    "firstName" => $request->firstName,
                    "middleName" => $request->middleName,
                    "lastName" => $request->lastName,
                ]);

            DB::commit();
            return self::loadResponse("Transaction Successfully Saved!", Response::HTTP_OK, new JsonOutput);

       } catch(\Throwable $th) {
            DB::rollBack();
            return self::loadResponse($th->getMessage(), Response::HTTP_BAD_REQUEST, new JsonOutput);
       }
    }

    public function update($request, $model): object
    {
       try {
        DB::beginTransaction();

            if (empty($request)) {
                return false;
            }

            $student = $model::where("id", $request->studentId)->first();
            if (!empty($student)) {
                $student->firstName = $request->firstName;
                $student->middleName = $request->middleName;
                $student->lastName = $request->lastName;
                $student->save();
            }
    
        DB::commit();
        return self::loadResponse("Transaction Successfully Updated!", Response::HTTP_OK, new JsonOutput);
       } catch(\Throwable $th) {
            DB::rollBack();
            return self::loadResponse($th->getMessage(), Response::HTTP_BAD_REQUEST, new JsonOutput);
       }
    }

    public function show($request, $model) : object
    {
        $student = $model::where("id", $request->studentId)->first();
        if (!empty($student)) {
            $request->firstName = $student->firstName;
            $request->middleName = $student->middleName;
            $request->lastName = $student->lastName;
        }

        return $request;
    }
}