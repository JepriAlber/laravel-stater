<div class="card">

    <div class="card-header">

        <strong>
            Profile Information
        </strong>

    </div>

    <div class="card-body">

        <form method="post"
              action="{{ route('profile.update') }}">

            @csrf
            @method('patch')

            <div class="mb-3">

                <label class="form-label">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name', $user->name) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email', $user->email) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    class="form-control"
                    value="{{ old('username', $user->username) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Phone Number
                </label>

                <input
                    type="text"
                    name="phone"
                    class="form-control"
                    value="{{ old('phone', $user->phone) }}">

            </div>

            <button class="btn btn-primary">

                Save Changes

            </button>

        </form>

    </div>

</div>