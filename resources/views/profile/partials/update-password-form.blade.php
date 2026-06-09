<div class="card">

    <div class="card-header">

        <strong>
            Change Password
        </strong>

    </div>

    <div class="card-body">

        <form method="post"
              action="{{ route('password.update') }}">

            @csrf
            @method('put')

            <div class="mb-3">

                <label>
                    Current Password
                </label>

                <input
                    type="password"
                    name="current_password"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>
                    New Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control">

            </div>

            <button class="btn btn-success">

                Update Password

            </button>

        </form>

    </div>

</div>