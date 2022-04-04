

## Novacore training tasks API
URL [https://novacore-training-todo-api.herokuapp.com/](https://novacore-training-todo-api.herokuapp.com/)

## Endpoints
- List all tasks
```
GET: https://novacore-training-todo-api.herokuapp.com/api/tasks
```
- Create task 
```
POST: https://novacore-training-todo-api.herokuapp.com/api/tasks
 should include “title” as string 
 should include “completed” as 1 or 0 to flag if task is completed 
```
 - Get task with ID: {id} 
```
GET: https://novacore-training-todo-api.herokuapp.com/api/tasks/{id}
```
  - Update task with ID: {id}
```
PATCH: https://novacore-training-todo-api.herokuapp.com/api/tasks/{id}
```
  - Delete task with ID: {id}
```
DELETE: https://novacore-training-todo-api.herokuapp.com/api/tasks/{id}
```

## created by [novacore.bg](https://novacore.bg) for training purposes

you can use this API freely as long as you drop us a mail at office[at]novacore.bg with the reason :)

## License

This training API code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
