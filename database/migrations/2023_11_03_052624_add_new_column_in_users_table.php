    <?php

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
            if (Schema::hasTable('users')) {
                Schema::table('users', function (Blueprint $table) {
                    if (!Schema::hasColumn('users', 'role_id')) {
                        $table->unsignedBigInteger('role_id');
                        $table->foreign('role_id')->references('id')->on('roles');
                    }
                    if (!Schema::hasColumn('users', 'branch_id')) {
                        $table->unsignedBigInteger('branch_id');
                        $table->foreign('branch_id')->references('id')->on('branches');
                    }
                });
            }
        }


        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            
            Schema::table('users', function (Blueprint $table) {
                if (Schema::hasColumn('users', 'role_id')) {
                    $table->dropForeign('users_role_id_foreign');
                    $table->dropColumn('role_id');
                }
                if (Schema::hasColumn('users', 'branch_id')) {
                    $table->dropForeign('users_branch_id_foreign');
                    $table->dropColumn('branch_id');
                }
            });
        }
    };
