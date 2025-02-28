module.exports = (tagName, attributes) => {
  const element = document.createElement(tagName)

  if (typeof attributes === 'object') {
    for (let i in attributes) {
      if (i === 'text') {
        element.textContent = attributes[i]
      } else if (i === 'html') {
        element.innerHTML = attributes[i]
      } else {
        element.setAttribute(i, attributes[i])
      }
    }
  }

  return element
}
