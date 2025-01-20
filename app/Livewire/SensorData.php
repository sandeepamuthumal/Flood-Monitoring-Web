<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\SensorData as ModelsSensorData;
use App\Models\SensorDataReading;
use Carbon\Carbon;
use Livewire\Component;

class SensorData extends Component
{
    public $cities = [];
    public $city;
    public $river_depth = 0, $road_depth = 0;
    public $river_level = 0, $road_level = 0, $temperature = 0;

    public $gate_status = 0;
    public $rain_status = 'No Rain (Clear)';
    public $last_recorded_at;

    public $vehicles = [
        'Car' => true,
        'Bus' => true,
        'Motorcycle' => true,
        'Truck' => true,
    ];

    private function getRainStatus($rainLevel)
    {
        if ($rainLevel >= 800) {
            return 'No Rain (Clear)';
        } elseif ($rainLevel >= 600) {
            return 'Light Rain';
        } elseif ($rainLevel >= 400) {
            return 'Moderate Rain';
        } else {
            return 'Heavy Rain';
        }
    }

    private function updateVehicleStatus()
    {
        $this->resetVehicleStatus();

        if($this->road_level >= 0.1){

            $this->vehicles['Motorcycle'] = false;
        }

        if($this->road_level >= 0.3){
            $this->vehicles['Car'] = false;
        }

        if($this->road_level >= 1){
            $this->vehicles['Bus'] = false;
            $this->vehicles['Truck'] = false;
        }

    }

    private function resetVehicleStatus()
    {
        $this->vehicles = [
            'Car' => true,
            'Bus' => true,
            'Motorcycle' => true,
            'Truck' => true,
        ];
    }


    public function render()
    {
        $this->cities = City::where('status', 1)->get();

        $sensor_data = ModelsSensorData::where('cities_id', $this->city)->first();

        if ($sensor_data) {
            $this->river_depth = $sensor_data->river_depth;
            $this->road_depth = $sensor_data->road_depth;
            $readings = SensorDataReading::where('sensor_data_id', $sensor_data->id)->latest()->first();

            if ($readings) {
                $this->river_level = $this->river_depth - $readings->river_level;
                $this->road_level = $this->road_depth - $readings->road_level;
                $this->temperature = $readings->temperature;
                $this->rain_status = $this->getRainStatus($readings->rain_level);
                $this->last_recorded_at = Carbon::parse($readings->recorded_at)->format('Y-m-d H:i:s');
                $this->gate_status = $readings->gate_status;
            }
        }

        $this->updateVehicleStatus();

        return view('livewire.sensor-data');
    }
}
