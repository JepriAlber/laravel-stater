<div class="card border-danger">

    <div class="card-header text-danger">

        <strong>
            Danger Zone
        </strong>

    </div>

    <div class="card-body">

        <p>
            Permanently delete your account.
        </p>

        <form method="post"
              action="{{ route('profile.destroy') }}">

            @csrf
            @method('delete')

            <button
                type="submit"
                class="btn btn-danger"
                onclick="return confirm('Delete this account permanently?')">

                Delete Account

            </button>

        </form>

    </div>

</div>