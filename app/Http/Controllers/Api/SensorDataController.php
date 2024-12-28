<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\SensorData;
use App\Models\SensorDataReading;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        try {
            //check city is already exists
            $is_city = City::where('city', $request->city)->where('status', 1)->exists();

            if ($is_city == false) {
                $city = new City();
                $city->city = $request->city;
                $city->status = 1;
                $city->save();
            } else {
                $city = City::where('city', $request->city)->where('status', 1)->first();
            }

            //check sensor data is already stored
            $is_data = SensorData::where('cities_id', $city->id)->exists();

            if ($is_data == false) {
                $data = new SensorData();
                $data->cities_id = $city->id;
                $data->river_depth = $request->riverDepth;
                $data->road_depth = $request->roadDepth;
                $data->save();

                $data_reading = new SensorDataReading();
                $data_reading->sensor_data_id = $data->id;
                $data_reading->river_level = $request->riverLevel;
                $data_reading->road_level = $request->roadLevel;
                $data_reading->temperature = $request->temperature;
                $data_reading->rain_level = $request->rainLevel;
                $data_reading->recorded_at = Carbon::now();
                $data_reading->save();
            } else {
                $data = SensorData::where('cities_id', $city->id)->first();
                $data->cities_id = $city->id;
                $data->river_depth = $request->riverDepth;
                $data->road_depth = $request->roadDepth;
                $data->update();

                $data_reading = SensorDataReading::where('sensor_data_id', $data->id)->first();
                $data_reading->sensor_data_id = $data->id;
                $data_reading->river_level = $request->riverLevel;
                $data_reading->road_level = $request->roadLevel;
                $data_reading->temperature = $request->temperature;
                $data_reading->rain_level = $request->rainLevel;
                $data_reading->recorded_at = Carbon::now();
                $data_reading->update();
            }

            return response()->json(['success' => true, 'status' => 1, 'message' => 'Data stored successfully']);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'status' => 0, 'message' => $th]);
        }
    }
}
