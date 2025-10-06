    <?php

    use App\Models\Client;
    use App\Models\Project;
    use App\Models\User;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('tasks', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('desc');
                $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
                $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
                $table->date('deadline');
                $table->string('status')->default('open');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('tasks');
        }
    };
