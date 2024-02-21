use Spatie\Activitylog\Traits\LogsActivity;

class Project extends Model
{
    use LogsActivity;

    // ... الكود الحالي ...

    public function getActivitylogOptions(): array
    {
        return [
            'log_name' => 'project_log', // اسم السجل الذي سيتم تسجيل الأنشطة فيه
            'log_attributes' => ['attribute1', 'attribute2'], // السمات التي يجب تسجيلها عند حدوث نشاط
        ];
    }
}
