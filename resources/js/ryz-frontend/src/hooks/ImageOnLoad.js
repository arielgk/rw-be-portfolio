import React,{useState} from 'react';


function useImageOnLoad() {
    const [isLoaded, setIsLoaded] = useState(false)

    // Triggered when full image will be loaded.
    const handleImageOnLoad = () => {
        setIsLoaded(true)
    }

    const css = {
        thumbnail: {
            visibility: isLoaded ? 'hidden' : 'visible',
            filter: 'blur(8px)',
            transition: 'visibility 0ms ease-out 500ms',
        },
        // Full image style.
        fullSize: {
            opacity: isLoaded ? 1 : 0,
            transition: 'opacity 500ms ease-in 0ms',
        },
    }

    return { handleImageOnLoad, css }
}

export default useImageOnLoad
