document.addEventListener('DOMContentLoaded', () => {
    const todo = document.querySelector('#todo')
    const addButton = document.querySelector('#addButton')
    const todolist = document.querySelector('#todolist')

    addButton.addEventListener('click', () => {
        const item = document.createElement('div') // div

        const checkbox = document.createElement('input') // 완료
        checkbox.setAttribute('type', 'checkbox')

        const text = document.createElement('span') // 내용
        text.textContent = todo.Value

        const removeButton = document.createElement('button') // 삭제
        removeButton.textContent = '삭제'

        removeButton.addEventListener('click', (event) => {
            event.currentTarget.parentNode.parentNode.removeChild(event.currentTarget.parentNode)
        })
        checkbox.addEventListener('change', () => {
            if(checkbox.checked){
                text.style.textDecorationLine = "line-through"
            }else{
                text.style.textDecorationLine = "none"
            }
        })
        item.appendChild(checkbox)
        item.appendChild(text)
        item.appendChild(removeButton)

        todolist.appendChild(item)
        todo.value = ''
    })
})