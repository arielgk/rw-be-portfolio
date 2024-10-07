import React from 'react';
import Thumb from './Thumb';
import Masonry from "react-masonry-css";


const MasonryGrid = ({posts}) => {
  return (
      <Masonry
          breakpointCols={4}
          className="my-masonry-grid"
          columnClassName="my-masonry-grid_column"
      >
          {posts.map((p) => (

              <Thumb key={p.id + "-id-post"} post={p}/>
          ))}
      </Masonry>
  );
};

export default MasonryGrid;
