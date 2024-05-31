@php
    use App\Models\User;if (isset($notification->data['user_id'])) {
        $notificationUser = User::find($notification->data['user_id']);
    } else {
        $notificationUser = user();
    }
@endphp
<x-cards.notification :notification="$notification"
                      :link="route('tasks.show', $notification->data['id']) . '?view=notes'"
                      :image="$notificationUser->image_url"
                      :title="__('email.taskNote.mentionNote'). ' #' . $notification->data['id']"
                      :text="$notification->data['heading']"
                      :time="$notification->created_at"/>
